import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('darkToggle');
    const html = document.documentElement;
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');

    const updateIcons = () => {
        if (html.classList.contains('dark')) {
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        } else {
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        }
    };

    // Load dark mode preference from localStorage
    if (localStorage.theme === 'dark') {
        html.classList.add('dark');
    } else {
        html.classList.remove('dark');
    }
    updateIcons();

    toggle.addEventListener('click', () => {
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.theme = 'light';
        } else {
            html.classList.add('dark');
            localStorage.theme = 'dark';
        }
        updateIcons();
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
