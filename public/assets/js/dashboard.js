document.getElementById('userMenuButton').addEventListener('click', () => {
    const userMenu = document.getElementById('userMenu');
    userMenu.style.display = userMenu.style.display === 'block' ? 'none' : 'block';
});

window.addEventListener('click', (e) => {
    if (!document.getElementById('userMenuButton').contains(e.target)) {
        document.getElementById('userMenu').style.display = 'none';
    }
});

const projectCtx = document.getElementById('projectChart').getContext('2d');
const reportCtx = document.getElementById('reportChart').getContext('2d');

const projectChart = new Chart(projectCtx, {
    type: 'doughnut',
    data: {
        labels: ['Others'],
        datasets: [{
            data: [100],
            backgroundColor: ['#FF5F15']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        }
    }
});

const reportChart = new Chart(reportCtx, {
    type: 'doughnut',
    data: {
        labels: ['Annual Reports'],
        datasets: [{
            data: [100],
            backgroundColor: ['#FF5F15']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        }
    }
});
