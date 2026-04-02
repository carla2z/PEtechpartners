import { useRef } from 'react';
import { motion, useMotionValue, useSpring, useReducedMotion } from 'framer-motion';
import type { ReactNode } from 'react';

interface MagneticButtonProps {
  href: string;
  children: ReactNode;
  variant?: 'crimson' | 'white' | 'ghost';
  className?: string;
}

const variants = {
  crimson: 'bg-crimson-500 text-white hover:bg-crimson-600 shadow-[0_2px_16px_rgba(191,10,48,0.25)]',
  white: 'bg-white text-navy-800 hover:bg-zinc-100 shadow-navy',
  ghost: 'border border-white/30 text-white hover:bg-white/10',
};

export default function MagneticButton({
  href,
  children,
  variant = 'crimson',
  className = '',
}: MagneticButtonProps) {
  const ref = useRef<HTMLAnchorElement>(null);
  const shouldReduceMotion = useReducedMotion();

  const x = useMotionValue(0);
  const y = useMotionValue(0);
  const springX = useSpring(x, { stiffness: 150, damping: 15 });
  const springY = useSpring(y, { stiffness: 150, damping: 15 });

  function handleMouseMove(e: React.MouseEvent) {
    if (shouldReduceMotion || !ref.current) return;
    const rect = ref.current.getBoundingClientRect();
    const centerX = rect.left + rect.width / 2;
    const centerY = rect.top + rect.height / 2;
    x.set((e.clientX - centerX) * 0.15);
    y.set((e.clientY - centerY) * 0.15);
  }

  function handleMouseLeave() {
    x.set(0);
    y.set(0);
  }

  return (
    <motion.a
      ref={ref}
      href={href}
      onMouseMove={handleMouseMove}
      onMouseLeave={handleMouseLeave}
      style={{ x: springX, y: springY }}
      whileTap={{ scale: 0.97 }}
      className={`inline-flex items-center justify-center px-7 py-3.5 text-sm font-semibold rounded-xl transition-colors ${variants[variant]} ${className}`}
    >
      {children}
    </motion.a>
  );
}
