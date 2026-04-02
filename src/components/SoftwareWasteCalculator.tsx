import { useState } from 'react';

function formatCurrency(value: number): string {
  if (value >= 1_000_000) {
    return `$${(value / 1_000_000).toFixed(1)}M`;
  }
  if (value >= 1_000) {
    return `$${(value / 1_000).toFixed(0)}K`;
  }
  return `$${value.toLocaleString()}`;
}

function formatCurrencyFull(value: number): string {
  return `$${value.toLocaleString()}`;
}

export default function SoftwareWasteCalculator() {
  const [professionals, setProfessionals] = useState(15);
  const [wastePerPerson, setWastePerPerson] = useState(10000);

  const totalWaste = professionals * wastePerPerson;
  const licensesInUse = 50;
  const appsZeroLogins = Math.round(professionals * 1.8);
  const appsUnused = 38;

  return (
    <div className="space-y-10">
      {/* Inputs */}
      <div className="space-y-8">
        <div>
          <div className="flex items-center justify-between mb-3">
            <label className="text-sm font-medium text-zinc-700">
              Number of Professionals
            </label>
            <span className="text-lg font-bold font-mono text-navy-800">
              {professionals}
            </span>
          </div>
          <input
            type="range"
            min={5}
            max={100}
            step={1}
            value={professionals}
            onChange={(e) => setProfessionals(Number(e.target.value))}
            className="w-full h-2 bg-zinc-200 rounded-full appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-5 [&::-webkit-slider-thumb]:h-5 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-crimson-500 [&::-webkit-slider-thumb]:cursor-pointer [&::-webkit-slider-thumb]:shadow-md [&::-moz-range-thumb]:w-5 [&::-moz-range-thumb]:h-5 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-crimson-500 [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer"
          />
          <div className="flex justify-between text-xs text-zinc-400 mt-1">
            <span>5</span>
            <span>100</span>
          </div>
        </div>

        <div>
          <div className="flex items-center justify-between mb-3">
            <label className="text-sm font-medium text-zinc-700">
              Estimated Software Waste Per Professional / Year
            </label>
            <span className="text-lg font-bold font-mono text-navy-800">
              {formatCurrencyFull(wastePerPerson)}
            </span>
          </div>
          <input
            type="range"
            min={100}
            max={500000}
            step={100}
            value={wastePerPerson}
            onChange={(e) => setWastePerPerson(Number(e.target.value))}
            className="w-full h-2 bg-zinc-200 rounded-full appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-5 [&::-webkit-slider-thumb]:h-5 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-crimson-500 [&::-webkit-slider-thumb]:cursor-pointer [&::-webkit-slider-thumb]:shadow-md [&::-moz-range-thumb]:w-5 [&::-moz-range-thumb]:h-5 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-crimson-500 [&::-moz-range-thumb]:border-0 [&::-moz-range-thumb]:cursor-pointer"
          />
          <div className="flex justify-between text-xs text-zinc-400 mt-1">
            <span>$100</span>
            <span>$500,000</span>
          </div>
        </div>
      </div>

      {/* Output Cards */}
      <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div className="bg-navy-800 rounded-2xl p-6">
          <p className="text-sm text-zinc-400 mb-2">Total Hidden Waste</p>
          <p className="text-3xl md:text-4xl font-bold font-mono text-white tracking-tighter">
            {formatCurrency(totalWaste)}
          </p>
          <p className="text-xs text-zinc-500 mt-2">per year across your firm</p>
        </div>

        <div className="bg-navy-800 rounded-2xl p-6">
          <p className="text-sm text-zinc-400 mb-2">Licenses Actually in Use</p>
          <p className="text-3xl md:text-4xl font-bold font-mono text-white tracking-tighter">
            {licensesInUse}%
          </p>
          <p className="text-xs text-zinc-500 mt-2">industry average utilization rate</p>
        </div>

        <div className="bg-navy-800 rounded-2xl p-6">
          <p className="text-sm text-zinc-400 mb-2">Apps with Zero Logins (18 mo)</p>
          <p className="text-3xl md:text-4xl font-bold font-mono text-white tracking-tighter">
            {appsZeroLogins}
          </p>
          <p className="text-xs text-zinc-500 mt-2">estimated ghost subscriptions</p>
        </div>

        <div className="bg-navy-800 rounded-2xl p-6">
          <p className="text-sm text-zinc-400 mb-2">Apps Unused or Barely Used</p>
          <p className="text-3xl md:text-4xl font-bold font-mono text-white tracking-tighter">
            {appsUnused}%
          </p>
          <p className="text-xs text-zinc-500 mt-2">of total software portfolio</p>
        </div>
      </div>

      {/* CTA */}
      <div className="text-center pt-4">
        <p className="text-zinc-600 text-sm mb-4">
          These are directional estimates. A full audit maps every license, login, and dollar.
        </p>
        <a
          href="/contact"
          className="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-crimson-500 rounded-xl hover:bg-crimson-600 active:scale-95 transition-all"
        >
          Book Your Audit
        </a>
      </div>
    </div>
  );
}
