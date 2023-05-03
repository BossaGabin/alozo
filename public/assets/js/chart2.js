var ctx = document.getElementById('doughnut').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Artisans', 'Clients', 'Annonces'],
        datasets: [{
            label: 'Utilisateurs',
            data: [12,8,6],
            backgroundColor: [
                'rgba(54, 162, 215,1)',
                'rgba(255, 206, 86,1)',
                'rgba(200, 46, 139,1)',

            ],
            borderColor: [
                'rgba(54, 162, 215,1)',
                'rgba(255, 206, 86,1)',
                'rgba(200, 46, 139,1)',



               
            ],
            borderWidth: 1
        }]
    },
    options: {
       responsive:true
    }
});