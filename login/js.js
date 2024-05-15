function validateForm() {
    return true;
  }
/*hakkımızda darie grafik */

  const ctx = document.getElementById('doughnut').getContext('2d');
const doughnut = new Chart(ctx,{
    type:'doughnut',
    data: {
        labels: ['TAİ','MSB','THK','ASELSAN','HAVELSAN' ],
        fill: false,
        datasets:[{
            label:'pay oran',
            data:[ 49, 13, 2, 26, 10],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderColor:[
                'rgba(400, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    Options: {
        labels:{
                
        },
        scales: {
            y:{
                beginAtZero: false
            }
        }
    }
});

