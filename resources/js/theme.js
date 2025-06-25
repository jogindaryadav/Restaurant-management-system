import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('darkToggle');
    const html = document.documentElement;

    // Load dark mode preference from localStorage
    if (localStorage.theme === 'dark') {
        html.classList.add('dark');
    } else {
        html.classList.remove('dark');
    }

    toggle.addEventListener('click', () => {
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.theme = 'light';
        } else {
            html.classList.add('dark');
            localStorage.theme = 'dark';
        }
    });
});

  const picker = new Litepicker({
    element: document.getElementById('dateRange'),
    singleMode: false,
    format: 'DD MMM, YYYY',
    numberOfMonths: 2,
    numberOfColumns: 2,
    autoApply: true,
    dropdowns: {
      minYear: 2025,
      maxYear: null,
      months: true,
      years: true
    }
  });
