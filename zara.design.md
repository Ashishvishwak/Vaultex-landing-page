---
version: alpha
name: "VAULTEX"
website: "https://www.vaultex.in"
description: >-
  The official B2B Industrial Safety Footwear design system for Vaultex and its market distribution partner Calliber's Safety Solutions LLP. Built with high-contrast electric blue (#00ADEF) for high-visibility industrial voltage and deep midnight navy (#000115) for industrial foundation, rigorous engineering trust, and premium dealership presentation across digital touchpoints, Gujarat WOSH 2026 exhibition collateral, and dealer onboarding portals.

seo:
  title: "Vaultex Design Tokens: Electric Blue & Midnight Navy Industrial System"
  metaDescription: "Official design tokens and system specifications for Vaultex industrial safety footwear: #00ADEF electric blue, #000115 midnight navy, 10-step tonal shade scales, and Archivo industrial typography."
  highlights:
    - "Primary Brand Electric Blue (#00ADEF) — 10-step full tonal scale from ice tint #E5F8FE to deep ocean #003D58 for active states, CTA buttons, focus halos, and badge highlights"
    - "Primary Brand Midnight Navy (#000115) — 10-step foundation scale from mist floor #F4F6F9 to deep industrial core #000115 and ultra-void #00000D"
    - "Industrial Typography — Google Font 'Archivo' (wght 300 to 900) paired with system fallbacks, calibrated for bold technical headings and high-legibility specification data"
    - "B2B Conversion Focus — High-contrast form elements, sticky above-the-fold lead capture, model badge overlays, and responsive exhibition announcement cards"
    - "Standardized 12-column grid with dual-mode support (light surface with dark navy structural contrasts)"
  tags:
    - "Industrial Safety"
    - "Footwear Manufacturing"
    - "B2B Dealership"
    - "Trade Exhibition"
  lastUpdated: "2026-10-24"
  author:
    name: "Vaultex Digital Design Team"
    organization: "Calliber's Safety Solutions LLP"

colors:
  # Primary Brand Identity
  brand-blue: "#00ADEF"
  brand-midnight: "#182236"

  # Electric Blue Full Shade Scale (#00ADEF)
  blue-050: "#E5F8FE"   # Tint floor, badge backgrounds, subtle callout glow
  blue-100: "#C1EFFC"   # Light border hover, pill backgrounds
  blue-200: "#91E3FA"   # Input focus halo, subtle highlight line
  blue-300: "#5BD4F7"   # Secondary bright accent, active tab indicator
  blue-400: "#26C3F3"   # High-voltage hover state
  blue-500: "#00ADEF"   # CORE PRIMARY BRAND ELECTRIC BLUE
  blue-600: "#0093CB"   # Primary button hover, text link hover
  blue-700: "#0077A5"   # Primary button active/pressed, high-contrast text on light
  blue-800: "#005B7F"   # Deep teal-navy border accent
  blue-900: "#003D58"   # Midnight blue shadow tint, dark badge
  blue-950: "#002334"   # Deepest cyan-tinted ink

  # Midnight Navy Full Shade Scale (#000115)
  midnight-050: "#F4F6F9" # Light mist section background, input backgrounds
  midnight-100: "#E5E9F0" # Card hairline border, divider rule
  midnight-200: "#C4CBD8" # Disabled state, muted border
  midnight-300: "#8E9BB2" # Placeholder text, secondary icons
  midnight-400: "#556480" # Secondary body text, caption tier
  midnight-500: "#28354D" # High-contrast body text on light surfaces
  midnight-600: "#182236" # Dark mode card surface, elevated panel
  midnight-700: "#0D1526" # Deep header / footer contrast
  midnight-800: "#060A1D" # Deepest exhibition card floor
  midnight-900: "#000115" # CORE BRAND MIDNIGHT NAVY FLOOR & INK
  midnight-950: "#00000D" # Extreme contrast dark ground

  # Neutral & Functional Tokens
  canvas: "#FFFFFF"
  canvas-subtle: "#F8FAFC"
  ink-primary: "#000115"
  ink-secondary: "#475569"
  ink-muted: "#64748B"
  ink-inverse: "#FFFFFF"
  ink-inverse-muted: "#94A3B8"

  # Semantic Feedback Tokens
  success: "#10B981"
  success-light: "#ECFDF5"
  warning: "#F59E0B"
  warning-light: "#FFFBEB"
  danger: "#EF4444"
  danger-light: "#FEF2F2"
  focus-ring: "rgba(0, 173, 239, 0.40)"
  shadow-brand: "rgba(0, 173, 239, 0.22)"
  shadow-card: "rgba(0, 1, 21, 0.08)"
  shadow-modal: "rgba(0, 1, 21, 0.65)"

typography:
  fontFamily:
    primary: "'Archivo', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif"
    mono: "ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace"

  scale:
    display-xl:
      fontSize: "3.75rem"      # 60px
      lineHeight: "1.08"
      fontWeight: "900"
      letterSpacing: "-0.03em"
    display-lg:
      fontSize: "3.0rem"       # 48px
      lineHeight: "1.12"
      fontWeight: "900"
      letterSpacing: "-0.025em"
    heading-xl:
      fontSize: "2.25rem"      # 36px
      lineHeight: "1.2"
      fontWeight: "800"
      letterSpacing: "-0.02em"
    heading-lg:
      fontSize: "1.875rem"     # 30px
      lineHeight: "1.25"
      fontWeight: "800"
      letterSpacing: "-0.015em"
    heading-md:
      fontSize: "1.5rem"       # 24px
      lineHeight: "1.3"
      fontWeight: "700"
      letterSpacing: "-0.01em"
    heading-sm:
      fontSize: "1.25rem"      # 20px
      lineHeight: "1.4"
      fontWeight: "700"
      letterSpacing: "0"
    body-lg:
      fontSize: "1.125rem"     # 18px
      lineHeight: "1.65"
      fontWeight: "400"
    body-md:
      fontSize: "1.0rem"       # 16px
      lineHeight: "1.6"
      fontWeight: "400"
    body-sm:
      fontSize: "0.875rem"     # 14px
      lineHeight: "1.5"
      fontWeight: "400"
    caption:
      fontSize: "0.75rem"      # 12px
      lineHeight: "1.4"
      fontWeight: "600"
      letterSpacing: "0.05em"
      textTransform: "uppercase"
    badge:
      fontSize: "0.6875rem"    # 11px
      lineHeight: "1"
      fontWeight: "800"
      letterSpacing: "0.12em"
      textTransform: "uppercase"

radii:
  none: "0px"
  sm: "6px"
  md: "10px"
  lg: "16px"
  xl: "24px"
  pill: "9999px"

shadows:
  soft: "0 10px 30px -5px rgba(0, 1, 21, 0.08)"
  card: "0 18px 45px -10px rgba(0, 1, 21, 0.10)"
  elevated: "0 25px 65px -15px rgba(0, 1, 21, 0.16)"
  electric-glow: "0 10px 28px rgba(0, 173, 239, 0.35)"
  electric-sm: "0 4px 14px rgba(0, 173, 239, 0.25)"

components:
  button-primary:
    backgroundColor: "{colors.blue-500}"
    textColor: "{colors.midnight-900}"
    borderRadius: "{radii.lg}"
    padding: "14px 28px"
    fontWeight: "800"
    boxShadow: "{shadows.electric-sm}"
    hover:
      backgroundColor: "{colors.blue-400}"
      boxShadow: "{shadows.electric-glow}"
      transform: "translateY(-2px)"

  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.midnight-900}"
    borderColor: "{colors.midnight-100}"
    borderRadius: "{radii.lg}"
    padding: "14px 28px"
    fontWeight: "700"
    hover:
      borderColor: "{colors.blue-500}"
      textColor: "{colors.blue-600}"

  card-product:
    backgroundColor: "{colors.canvas}"
    borderColor: "{colors.midnight-100}"
    borderRadius: "{radii.xl}"
    boxShadow: "{shadows.soft}"
    hover:
      borderColor: "{colors.blue-300}"
      boxShadow: "{shadows.card}"
      transform: "translateY(-4px)"

  form-container:
    backgroundColor: "{colors.canvas}"
    borderRadius: "{radii.xl}"
    boxShadow: "{shadows.elevated}"
    borderColor: "rgba(255, 255, 255, 0.9)"
    padding: "28px"
