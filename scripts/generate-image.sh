#!/usr/bin/env bash
set -euo pipefail

# Generate images using the Gemini API
# Usage: ./scripts/generate-image.sh "prompt" "output-filename" "aspect-ratio"
# Example: ./scripts/generate-image.sh "modern office building" "hero-office" "16:9"

PROMPT="${1:?Usage: $0 \"prompt\" \"output-filename\" \"aspect-ratio\"}"
OUTPUT_NAME="${2:?Please provide an output filename (without extension)}"
ASPECT_RATIO="${3:-1:1}"

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(dirname "$SCRIPT_DIR")"
OUTPUT_DIR="$PROJECT_ROOT/public/images/generated"

# Load API key from .env
if [ -f "$PROJECT_ROOT/.env" ]; then
  export $(grep -E '^GEMINI_API_KEY=' "$PROJECT_ROOT/.env" | xargs)
fi

if [ -z "${GEMINI_API_KEY:-}" ]; then
  echo "Error: GEMINI_API_KEY not found. Set it in .env or as an environment variable."
  exit 1
fi

mkdir -p "$OUTPUT_DIR"

OUTPUT_FILE="$OUTPUT_DIR/${OUTPUT_NAME}.png"

echo "Generating image: \"$PROMPT\""
echo "Aspect ratio: $ASPECT_RATIO"
echo "Output: $OUTPUT_FILE"

RESPONSE=$(curl -s "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-image:generateContent?key=${GEMINI_API_KEY}" \
  -H "Content-Type: application/json" \
  -d "{
    \"contents\": [{
      \"parts\": [{
        \"text\": \"Generate an image: ${PROMPT}. Aspect ratio: ${ASPECT_RATIO}. Professional, high quality, suitable for a business website.\"
      }]
    }],
    \"generationConfig\": {
      \"responseModalities\": [\"TEXT\", \"IMAGE\"]
    }
  }")

# Extract base64 image data from response
IMAGE_DATA=$(echo "$RESPONSE" | python3 -c "
import sys, json
data = json.load(sys.stdin)
parts = data.get('candidates', [{}])[0].get('content', {}).get('parts', [])
for part in parts:
    if 'inlineData' in part:
        print(part['inlineData']['data'])
        break
" 2>/dev/null)

if [ -z "$IMAGE_DATA" ]; then
  echo "Error: Failed to generate image. API response:"
  echo "$RESPONSE" | python3 -m json.tool 2>/dev/null || echo "$RESPONSE"
  exit 1
fi

echo "$IMAGE_DATA" | base64 -d > "$OUTPUT_FILE"
echo "Image saved to $OUTPUT_FILE"
echo "Size: $(du -h "$OUTPUT_FILE" | cut -f1)"
