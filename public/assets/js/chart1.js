var ctx = document.getElementById('lineChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        datasets: [{
            label: '# of Votes',
            data: [2050, 1236, 2063, 4569, 2105, 1800,5268,2035,1025,3056,1200,5000],
            backgroundColor: [
                'rgba(85, 85, 85, 1)',
            ],
            borderColor: [
                'rgb(41, 155, 99,)',
               
            ],
            borderWidth: 1
        }]
    },
    options: {
       responsive:true
    }
});