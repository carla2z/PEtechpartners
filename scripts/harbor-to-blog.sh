#!/usr/bin/env bash
set -euo pipefail

# Harbor SEO → Astro Blog Post Converter
# Usage: ./scripts/harbor-to-blog.sh "Article Title" "category" "read-time"
# Example: ./scripts/harbor-to-blog.sh "How PE Firms Win with Cloud Migration" "Strategy" "8 min read"
#
# Reads article content from stdin or a file passed as 4th argument.
# Generates a properly formatted Astro content collection markdown file.

TITLE="${1:?Usage: $0 \"Article Title\" \"category\" \"read-time\" [input-file]}"
CATEGORY="${2:-Strategy}"
READ_TIME="${3:-8 min read}"
INPUT_FILE="${4:-}"

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(dirname "$SCRIPT_DIR")"
BLOG_DIR="$PROJECT_ROOT/src/content/blog"

# Generate slug from title
SLUG=$(echo "$TITLE" | tr '[:upper:]' '[:lower:]' | sed 's/[^a-z0-9]/-/g' | sed 's/--*/-/g' | sed 's/^-//;s/-$//')

OUTPUT_FILE="$BLOG_DIR/${SLUG}.md"

if [ -f "$OUTPUT_FILE" ]; then
  echo "Error: $OUTPUT_FILE already exists. Delete it first or use a different title."
  exit 1
fi

# Get today's date
PUB_DATE=$(date +%Y-%m-%d)

# Read content from file or stdin
if [ -n "$INPUT_FILE" ] && [ -f "$INPUT_FILE" ]; then
  CONTENT=$(cat "$INPUT_FILE")
elif [ ! -t 0 ]; then
  CONTENT=$(cat)
else
  echo "Error: No content provided. Pipe content or pass a file path as 4th argument."
  echo ""
  echo "Examples:"
  echo "  cat harbor-export.md | ./scripts/harbor-to-blog.sh \"My Title\" \"Strategy\" \"8 min read\""
  echo "  ./scripts/harbor-to-blog.sh \"My Title\" \"Strategy\" \"8 min read\" harbor-export.md"
  echo "  pbpaste | ./scripts/harbor-to-blog.sh \"My Title\" \"Strategy\" \"8 min read\""
  exit 1
fi

# Extract first 155 chars of content for description (strip markdown headers)
DESCRIPTION=$(echo "$CONTENT" | grep -v '^#' | grep -v '^$' | head -3 | tr '\n' ' ' | cut -c1-155 | sed 's/[[:space:]]*$//')

# Extract keywords from title for tags
TAGS=$(echo "$TITLE" | tr '[:upper:]' '[:lower:]' | tr ' ' '\n' | grep -v -E '^(the|a|an|of|for|in|on|to|and|or|how|why|what|with|your|is|are|do|does|can)$' | head -5 | awk '{printf "\"%s\", ", $0}' | sed 's/, $//')

# Write the markdown file
cat > "$OUTPUT_FILE" << MDEOF
---
title: "$TITLE"
description: "$DESCRIPTION"
pubDate: $PUB_DATE
tags: [$TAGS]
author: "PE Tech Partners"
category: "$CATEGORY"
readTime: "$READ_TIME"
draft: false
---

$CONTENT
MDEOF

echo "Blog post created: $OUTPUT_FILE"
echo "  Title: $TITLE"
echo "  Slug: $SLUG"
echo "  Category: $CATEGORY"
echo "  Date: $PUB_DATE"
echo ""
echo "Next steps:"
echo "  1. Review the file and edit the description/tags if needed"
echo "  2. Add an image to public/images/generated/blog-${SLUG}.png"
echo "  3. Add 'image: \"/images/generated/blog-${SLUG}.png\"' to the frontmatter"
echo "  4. Run: npm run build && npx vercel --prod"
