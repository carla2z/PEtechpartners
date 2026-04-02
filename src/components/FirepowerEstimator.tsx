import { useState } from 'react';

function getBenchmarkLabel(multiplier: number): { label: string; color: string } {
  if (multiplier < 2) return { label: 'Baseline', color: 'text-zinc-400' };
  if (multiplier < 3) return { label: 'Developing', color: 'text-amber-400' };
  if (multiplier < 5) return { label: 'Advanced', color: 'text-emerald-400' };
  return { label: 'Strike-team', color: 'text-crimson-400' };
}

export default function FirepowerEstimator() {
  const [teamSize, setTeamSize] = useState(10);
  const [baseOutput, setBaseOutput] = useState(10);
  const [automationDepth, setAutomationDepth] = useState(40);
  const [verificationQuality, setVerificationQuality] = useState(80);
  const [coordinationDrag, setCoordinationDrag] = useState(20);

  const automatedOutput = baseOutput * (1 + automationDepth / 100);
  const verifiedOutput = automatedOutput * (verificationQuality / 100);
  const effectiveOutput = verifiedOutput * (1 - coordinationDrag / 100);
  const effectiveTeamEquivalent = (teamSize * effectiveOutput) / baseOutput;
  const firepowerMultiplier = effectiveTeamEquivalent / teamSize;
  const verifiedOutputUnits = teamSize * effectiveOutput;

  const benchmark = getBenchmarkLabel(firepowerMultiplier);

  const sliderClass =
    'w-full h-2 bg-zinc-200 rounded-full appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-5 [&::-webkit-slider-thumb]:h-5 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-crimson-500 [&::-webkit-slider-thumb]:cursor-pointer [&::-webkit-slider-thumb]:shadow-md [&::-moz-range-thumb]:w-5 [&::-moz-range-thumb]:h-5 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-crimson-500 [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer';

  const inputs: {
    label: string;
    value: number;
    setter: (v: number) => void;
    min: number;
    max: number;
    step: number;
    suffix?: string;
  }[] = [
    { label: 'Team Size', value: teamSize, setter: setTeamSize, min: 1, max: 100, step: 1 },
    { label: 'Base Output per Person / Quarter', value: baseOutput, setter: setBaseOutput, min: 1, max: 100, step: 1 },
    { label: 'Automation Depth', value: automationDepth, setter: setAutomationDepth, min: 0, max: 100, step: 1, suffix: '%' },
    { label: 'Verification Quality', value: verificationQuality, setter: setVerificationQuality, min: 0, max: 100, step: 1, suffix: '%' },
    { label: 'Coordination Drag', value: coordinationDrag, setter: setCoordinationDrag, min: 0, max: 100, step: 1, suffix: '%' },
  ];

  return (
    <div className="space-y-10">
      {/* Inputs */}
      <div className="space-y-6">
        {inputs.map((input) => (
          <div key={input.label}>
            <div className="flex items-center justify-between mb-3">
              <label className="text-sm font-medium text-zinc-700">{input.label}</label>
              <span className="text-lg font-bold font-mono text-navy-800">
                {input.value}{input.suffix || ''}
              </span>
            </div>
            <input
              type="range"
              min={input.min}
              max={input.max}
              step={input.step}
              value={input.value}
              onChange={(e) => input.setter(Number(e.target.value))}
              className={sliderClass}
            />
            <div className="flex justify-between text-xs text-zinc-400 mt-1">
              <span>{input.min}{input.suffix || ''}</span>
              <span>{input.max}{input.suffix || ''}</span>
            </div>
          </div>
        ))}
      </div>

      {/* Output Cards */}
      <div className="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div className="bg-navy-800 rounded-2xl p-6">
          <p className="text-sm text-zinc-400 mb-2">Effective Team Equivalent</p>
          <p className="text-3xl md:text-4xl font-bold font-mono text-white tracking-tighter">
            {effectiveTeamEquivalent.toFixed(1)}
          </p>
          <p className="text-xs text-zinc-500 mt-2">
            from {teamSize} actual team members
          </p>
        </div>

        <div className="bg-navy-800 rounded-2xl p-6">
          <p className="text-sm text-zinc-400 mb-2">Verified Output Units / Quarter</p>
          <p className="text-3xl md:text-4xl font-bold font-mono text-white tracking-tighter">
            {verifiedOutputUnits.toFixed(0)}
          </p>
          <p className="text-xs text-zinc-500 mt-2">
            vs. {teamSize * baseOutput} at baseline
          </p>
        </div>

        <div className="bg-navy-800 rounded-2xl p-6">
          <p className="text-sm text-zinc-400 mb-2">Firepower Multiplier</p>
          <p className="text-3xl md:text-4xl font-bold font-mono text-white tracking-tighter">
            {firepowerMultiplier.toFixed(2)}x
          </p>
          <p className={`text-xs font-semibold mt-2 ${benchmark.color}`}>
            {benchmark.label}
          </p>
        </div>
      </div>

      {/* Benchmark Scale */}
      <div className="rounded-xl border border-zinc-200 p-4">
        <p className="text-xs font-medium text-zinc-500 uppercase tracking-wide mb-3">Benchmark Scale</p>
        <div className="grid grid-cols-4 gap-2 text-center">
          <div className={`rounded-lg py-2 px-1 text-xs font-medium ${firepowerMultiplier < 2 ? 'bg-zinc-100 text-zinc-800 ring-1 ring-zinc-300' : 'bg-zinc-50 text-zinc-400'}`}>
            <p className="font-mono font-bold">1x-2x</p>
            <p>Baseline</p>
          </div>
          <div className={`rounded-lg py-2 px-1 text-xs font-medium ${firepowerMultiplier >= 2 && firepowerMultiplier < 3 ? 'bg-amber-50 text-amber-800 ring-1 ring-amber-300' : 'bg-zinc-50 text-zinc-400'}`}>
            <p className="font-mono font-bold">2x-3x</p>
            <p>Developing</p>
          </div>
          <div className={`rounded-lg py-2 px-1 text-xs font-medium ${firepowerMultiplier >= 3 && firepowerMultiplier < 5 ? 'bg-emerald-50 text-emerald-800 ring-1 ring-emerald-300' : 'bg-zinc-50 text-zinc-400'}`}>
            <p className="font-mono font-bold">3x-5x</p>
            <p>Advanced</p>
          </div>
          <div className={`rounded-lg py-2 px-1 text-xs font-medium ${firepowerMultiplier >= 5 ? 'bg-crimson-50 text-crimson-800 ring-1 ring-crimson-300' : 'bg-zinc-50 text-zinc-400'}`}>
            <p className="font-mono font-bold">5x-10x</p>
            <p>Strike-team</p>
          </div>
        </div>
      </div>

      {/* CTA */}
      <div className="text-center pt-4">
        <p className="text-zinc-600 text-sm mb-4">
          These estimates model theoretical output. A Strategic Debrief maps the real numbers for your team.
        </p>
        <a
          href="/contact"
          className="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-crimson-500 rounded-xl hover:bg-crimson-600 active:scale-95 transition-all"
        >
          Secure a Strategic Debrief
        </a>
      </div>
    </div>
  );
}
