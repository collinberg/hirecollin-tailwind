/*

Tailwind - The Utility-First CSS Framework


|-------------------------------------------------------------------------------
| The default config
|-------------------------------------------------------------------------------
|
| This variable contains the default Tailwind config. You don't have
| to use it, but it can sometimes be helpful to have available. For
| example, you may choose to merge your custom configuration
| values with some of the Tailwind defaults.
|
*/

// let defaultConfig = require('tailwindcss/defaultConfig')()

let colors = {
  'primary': '#3f8354', //'#0e7c7b',
  'secondary' : '#ea5f6b',

  'transparent': 'transparent',

  'black': '#22292f',
  'grey-darkest': '#3d4852',
  'grey-darker': '#606f7b',
  'grey-dark': '#8795a1',
  'grey': '#b8c2cc',
  'grey-light': '#dae1e7',
  'grey-lighter': '#f1f5f8',
  'grey-lightest': '#f8fafc',
  'white': '#ffffff',

  'blue-darkest': '#12283a',
  'blue-darker': '#1c3d5a',
  'blue-dark': '#2779bd',
  'blue': '#3490dc',
  'blue-light': '#6cb2eb',
  'blue-lighter': '#bcdefa',
  'blue-lightest': '#eff8ff',

}

module.exports = {
  theme: {
    colors: colors,
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
    },
    fontFamily: {
      'sans': [
        'Open Sans',
        '-apple-system',
        'Segoe UI',
        'Roboto',
        'sans-serif',
      ],
      'serif': [
        'Constantia',
        'Georgia',
        'serif',
      ],
      'mono': [
        'Menlo',
        'Monaco',
        'monospace',
      ],
      'display': [
        'PT Serif',
        '-apple-system',
        'Segoe UI',
        'Roboto',
        'sans-serif',
      ],
    },
    fontSize: {
      'xs': '.75rem',     // 12px
      'sm': '.875rem',    // 14px
      'base': '1rem',     // 16px
      'lg': '1.125rem',   // 18px
      'xl': '1.25rem',    // 20px
      '2xl': '1.5rem',    // 24px
      '3xl': '1.875rem',  // 30px
      '4xl': '2.25rem',   // 36px
      '5xl': '3rem',      // 48px
    },
    fontWeight: {
      'light': 300,
      'normal': 400,
      'medium': 500,
      'semibold': 600,
      'bold': 800,
    },
    lineHeight: {
      'none': 1,
      'tight': 1.25,
      'normal': 1.5,
      'loose': 2,
    },
    textColor: colors,
    backgroundColor: colors,
    backgroundSize: {
      'auto': 'auto',
      'cover': 'cover',
      'contain': 'contain',
    },
    borderWidth: {
      default: '1px',
      '0': '0',
      '2': '2px',
      '4': '4px',
    },
    borderColor: global.Object.assign({ default: colors['grey-light'] }, colors),
    borderRadius: {
      'none': '0',
      'sm': '.125rem',
      default: '.25rem',
      'lg': '.5rem',
      'full': '9999px',
    },
    width: {
      'auto': 'auto',
      'px': '1px',
      '1': '0.25rem',
      '2': '0.5rem',
      '3': '0.75rem',
      '4': '1rem',
      '5': '1.25rem',
      '6': '1.5rem',
      '8': '2rem',
      '10': '2.5rem',
      '12': '3rem',
      '16': '4rem',
      '24': '6rem',
      '32': '8rem',
      '48': '12rem',
      '64': '16rem',
      '1/2': '50%',
      '1/3': '33.33333%',
      '2/3': '66.66667%',
      '1/4': '25%',
      '3/4': '75%',
      '1/5': '20%',
      '2/5': '40%',
      '3/5': '60%',
      '4/5': '80%',
      '1/6': '16.66667%',
      '5/6': '83.33333%',
      'full': '100%',
      'screen': '100vw'
    },
    height: {
      'auto': 'auto',
      'px': '1px',
      '1': '0.25rem',
      '2': '0.5rem',
      '3': '0.75rem',
      '4': '1rem',
      '5': '1.25rem',
      '6': '1.5rem',
      '8': '2rem',
      '10': '2.5rem',
      '12': '3rem',
      '16': '4rem',
      '24': '6rem',
      '32': '8rem',
      '48': '12rem',
      '64': '16rem',
      'full': '100%',
      '1/2' : '50vh',
      '3/4' : '75vh',
      'screen': '100vh'
    },
    minWidth: {
      '0': '0',
      'full': '100%',
    },
    minHeight: {
      '0': '0',
      'full': '100%',
      'screen': '100vh'
    },
    maxWidth: {
      'xs': '20rem',
      'sm': '30rem',
      'md': '40rem',
      'lg': '50rem',
      'xl': '60rem',
      '2xl': '70rem',
      '3xl': '80rem',
      '4xl': '90rem',
      '5xl': '100rem',
      'full': '100%',
    },
    maxHeight: {
      'full': '100%',
      'screen': '100vh',
    },
    padding: {
      'px': '1px',
      '0': '0',
      '1': '0.25rem',
      '2': '0.5rem',
      '3': '0.75rem',
      '4': '1rem',
      '5': '1.25rem',
      '6': '1.5rem',
      '8': '2rem',
      '10': '2.5rem',
      '12': '3rem',
      '16': '4rem',
      '20': '5rem',
      '24': '6rem',
      '32': '8rem',
    },
    container: {
      center: true,
      padding: '1rem',
    },
    margin: {
      'auto': 'auto',
      'px': '1px',
      '0': '0',
      '1': '0.25rem',
      '2': '0.5rem',
      '3': '0.75rem',
      '4': '1rem',
      '5': '1.25rem',
      '6': '1.5rem',
      '8': '2rem',
      '10': '2.5rem',
      '12': '3rem',
      '16': '4rem',
      '20': '5rem',
      '24': '6rem',
      '32': '8rem',
      '-px': '-1px',
      '-1': '-0.25rem',
      '-2': '-0.5rem',
      '-3': '-0.75rem',
      '-4': '-1rem',
      '-5': '-1.25rem',
      '-6': '-1.5rem',
      '-8': '-2rem',
      '-10': '-2.5rem',
      '-12': '-3rem',
      '-16': '-4rem',
      '-20': '-5rem',
      '-24': '-6rem',
      '-32': '-8rem',
    },
    boxShadow: {
      default: '0 2px 4px 0 rgba(0,0,0,0.10)',
      'md': '0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08)',
      'lg': '0 10px 15px -3px rgba(0,0,0,.1), 0 4px 6px -2px rgba(0,0,0,.05)',
      'inner': 'inset 0 2px 4px 0 rgba(0,0,0,0.06)',
      'outline': '0 0 0 3px rgba(82,93,220,0.3)',
      'none': 'none',
    },
    zIndex: {
      'auto': 'auto',
      '0': 0,
      '10': 10,
      '20': 20,
      '30': 30,
      '40': 40,
      '50': 50,
    },
    opacity: {
      '0': '0',
      '25': '.25',
      '50': '.5',
      '75': '.75',
      '100': '1',
    },
    order: {
          first: '-9999',
          last: '9999',
          none: '0',
          '1': '1',
          '2': '2',
          '3': '3',
          '4': '4',
          '5': '5',
          '10': '10',
        },
    fill: {
      'current': 'currentColor',
    },
    stroke: {
      'current': 'currentColor',
    },
    extend: {
      screens: {
        'light': {'raw': '(prefers-color-scheme: light)' },
        'dark': {'raw': '(prefers-color-scheme: dark)'},
        // => @media (prefers-color-scheme: dark) { ... }
      }
    }
  },
  variants: {
    appearance: ['responsive'],
    backgroundAttachment: ['responsive'],
    backgroundColor: ['responsive', 'hover', 'focus'],
    backgroundPosition: ['responsive'],
    backgroundRepeat: ['responsive'],
    backgroundSize: ['responsive'],
    borderCollapse: [],
    borderColor: ['responsive', 'hover', 'focus'],
    borderRadius: ['responsive'],
    borderStyle: ['responsive'],
    borderWidth: ['responsive'],
    cursor: ['responsive'],
    display: ['responsive'],
    flexDirection: ['responsive'],
    flexWrap: ['responsive'],
    alignItems: ['responsive'],
    alignSelf: ['responsive'],
    justifyContent: ['responsive'],
    alignContent: ['responsive'],
    flex: ['responsive'],
    flexGrow: ['responsive'],
    flexShrink: ['responsive'],
    float: ['responsive'],
    fontFamily: ['responsive'],
    fontWeight: ['responsive', 'hover', 'focus'],
    height: ['responsive'],
    lineHeight: ['responsive'],
    listStylePosition: ['responsive'],
    listStyleType: ['responsive'],
    margin: ['responsive'],
    maxHeight: ['responsive'],
    maxWidth: ['responsive'],
    minHeight: ['responsive'],
    minWidth: ['responsive'],
    negativeMargin: ['responsive'],
    opacity: ['responsive'],
    outline: ['focus'],
    overflow: ['responsive'],
    padding: ['responsive'],
    pointerEvents: ['responsive'],
    position: ['responsive'],
    inset: ['responsive'],
    resize: ['responsive'],
    boxShadow: ['responsive', 'hover', 'focus'],
    fill: [],
    stroke: [],
    tableLayout: ['responsive'],
    textAlign: ['responsive'],
    textColor: ['responsive', 'hover', 'focus'],
    fontSize: ['responsive'],
    textStyle: ['responsive', 'hover', 'focus'],
    fontSmoothing: ['responsive', 'hover', 'focus'],
    textDecoration: ['responsive', 'hover', 'focus'],
    textTransform: ['responsive', 'hover', 'focus'],
    letterSpacing: ['responsive'],
    userSelect: ['responsive'],
    verticalAlign: ['responsive'],
    visibility: ['responsive'],
    whitespace: ['responsive'],
    wordBreak: ['responsive'],
    width: ['responsive'],
    zIndex: ['responsive'],
  },
  plugins: [
    function({ addBase, config }) {
      addBase({
        body: {
          color: config("theme.colors.black"),
          backgroundColor: config("theme.colors.white")
        },
        "@screen dark": {
          body: {
            color: config("theme.colors.white"),
            backgroundColor: config("theme.colors.black")
          }
        }
      });
    }
  ]
}
