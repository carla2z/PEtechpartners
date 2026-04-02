import { useState } from 'react';

export default function AdminLogin() {
  const [password, setPassword] = useState('');
  const [status, setStatus] = useState<'idle' | 'loading' | 'error'>('idle');
  const [errorMsg, setErrorMsg] = useState('');

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setStatus('loading');
    setErrorMsg('');

    try {
      const res = await fetch('/api/admin/login', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ password }),
      });

      const data = await res.json();

      if (res.ok && data.success) {
        window.location.href = '/admin';
      } else {
        setStatus('error');
        setErrorMsg(data.error || 'Invalid password');
      }
    } catch {
      setStatus('error');
      setErrorMsg('Connection error. Try again.');
    }
  };

  return (
    <form onSubmit={handleSubmit} className="w-full max-w-sm space-y-6 p-8">
      <div>
        <h1 className="text-2xl font-bold tracking-tight" style={{ color: '#0A2E50' }}>Admin Access</h1>
        <p className="text-sm text-zinc-500 mt-1">Enter your admin password to continue.</p>
      </div>

      {status === 'error' && (
        <div className="rounded-xl border border-red-200 bg-red-50 px-4 py-3">
          <p className="text-sm text-red-700">{errorMsg}</p>
        </div>
      )}

      <div className="space-y-2">
        <label htmlFor="password" className="block text-sm font-medium text-zinc-700">Password</label>
        <input
          type="password"
          id="password"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
          required
          autoFocus
          className="w-full px-4 py-3 rounded-xl border border-zinc-200 bg-white text-zinc-900 focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-300 transition-all"
          placeholder="Enter admin password"
        />
      </div>
      <button
        type="submit"
        disabled={status === 'loading'}
        className="w-full px-6 py-3 text-sm font-semibold text-white rounded-xl hover:opacity-90 active:scale-[0.98] disabled:opacity-50 transition-all"
        style={{ backgroundColor: '#0A2E50' }}
      >
        {status === 'loading' ? 'Logging in...' : 'Login'}
      </button>
    </form>
  );
}
