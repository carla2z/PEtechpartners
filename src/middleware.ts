import { defineMiddleware } from 'astro:middleware';

export const onRequest = defineMiddleware(async (context, next) => {
  const path = context.url.pathname;

  // Protect admin routes (except login and logout)
  if (path.startsWith('/admin') && path !== '/admin/login' && path !== '/admin/logout') {
    const adminToken = context.cookies.get('admin_token')?.value;
    if (adminToken !== import.meta.env.ADMIN_SECRET) {
      return context.redirect('/admin/login');
    }
  }

  const response = await next();

  response.headers.set('X-Content-Type-Options', 'nosniff');
  response.headers.set('X-Frame-Options', 'SAMEORIGIN');
  response.headers.set('Referrer-Policy', 'strict-origin-when-cross-origin');
  response.headers.set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');

  return response;
});
