import { useState } from 'react';

export default function ContactForm() {
  const [status, setStatus] = useState<'idle' | 'sending' | 'sent' | 'error'>('idle');

  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setStatus('sending');
    const formData = new FormData(e.currentTarget);

    try {
      const res = await fetch('/api/contact', { method: 'POST', body: formData });
      setStatus(res.ok ? 'sent' : 'error');
    } catch {
      setStatus('error');
    }
  };

  if (status === 'sent') {
    return (
      <div className="rounded-2xl border border-emerald-200 bg-emerald-50 p-8 text-center">
        <div className="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg className="w-6 h-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
            <path strokeLinecap="round" strokeLinejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <p className="text-emerald-800 font-semibold text-lg mb-1">Debrief request received.</p>
        <p className="text-emerald-700 text-sm">We typically respond within one business day.</p>
      </div>
    );
  }

  return (
    <form onSubmit={handleSubmit} className="space-y-5">
      <div className="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div className="space-y-2">
          <label htmlFor="name" className="block text-sm font-medium text-zinc-700">Full Name</label>
          <input
            id="name" name="name" type="text" required
            className="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-white text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-navy-800/10 focus:border-navy-400 transition-all"
            placeholder="Marcus Whitfield"
          />
        </div>
        <div className="space-y-2">
          <label htmlFor="company" className="block text-sm font-medium text-zinc-700">Firm Name</label>
          <input
            id="company" name="company" type="text"
            className="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-white text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-navy-800/10 focus:border-navy-400 transition-all"
            placeholder="Meridian Capital Partners"
          />
        </div>
      </div>

      <div className="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div className="space-y-2">
          <label htmlFor="email" className="block text-sm font-medium text-zinc-700">Email</label>
          <input
            id="email" name="email" type="email" required
            className="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-white text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-navy-800/10 focus:border-navy-400 transition-all"
            placeholder="mwhitfield@meridiancap.com"
          />
        </div>
        <div className="space-y-2">
          <label htmlFor="phone" className="block text-sm font-medium text-zinc-700">Phone <span className="text-zinc-400">(optional)</span></label>
          <input
            id="phone" name="phone" type="tel"
            className="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-white text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-navy-800/10 focus:border-navy-400 transition-all"
            placeholder="+1 (212) 555-0147"
          />
        </div>
      </div>

      <div className="space-y-2">
        <label htmlFor="firmType" className="block text-sm font-medium text-zinc-700">Firm Type</label>
        <select
          id="firmType" name="firmType"
          className="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-white text-zinc-900 focus:outline-none focus:ring-2 focus:ring-navy-800/10 focus:border-navy-400 transition-all"
        >
          <option value="">Select your firm type</option>
          <option value="pe">Private Equity</option>
          <option value="ma">M&A Advisory</option>
          <option value="vc">Venture Capital</option>
          <option value="family-office">Family Office</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div className="space-y-2">
        <label htmlFor="message" className="block text-sm font-medium text-zinc-700">What's your biggest tech pain right now?</label>
        <textarea
          id="message" name="message" required rows={4}
          className="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-white text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-navy-800/10 focus:border-navy-400 transition-all resize-none"
          placeholder="Our CRM doesn't talk to our data room and the team wastes hours on manual entry..."
        />
      </div>

      <button
        type="submit"
        disabled={status === 'sending'}
        className="w-full px-6 py-3.5 text-sm font-semibold text-white bg-crimson-500 rounded-xl hover:bg-crimson-600 active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed transition-all"
      >
        {status === 'sending' ? 'Submitting...' : 'Secure Your Strategic Debrief'}
      </button>

      <p className="text-xs text-zinc-400 text-center">No cost. No pressure. High clarity.</p>

      {status === 'error' && (
        <p className="text-sm text-red-600 text-center">Something went wrong. Please try again or call (917) 715-7100.</p>
      )}
    </form>
  );
}
