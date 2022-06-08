$(function () {
    var value = 65;
    var data = {
        labels: [
            "درصد پیشرفت",
            ""
        ],
        datasets: [
            {
                data: [value, 100-value],
                backgroundColor: [
                    "#FF6384",
                    "#AAAAAA"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#AAAAAA"
                ],
                hoverBorderColor: [
                    "#FF6384",
                    "#ffffff"
                ]
            }]
    };

    var myChart = new Chart(document.getElementById('myChart'), {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            cutoutPercentage: 80,
            maintainAspectRatio: false,
            tooltips: {
                enabled: false,
            },
        }
    });

    var data1 = {
        labels: [
            "درصد پیشرفت",
            ""
        ],
        datasets: [
            {
                data: [41, 59],
                backgroundColor: [
                    "#4cba06",
                    "#AAAAAA"
                ],
                hoverBackgroundColor: [
                    "#4cba06",
                    "#AAAAAA"
                ],
                hoverBorderColor: [
                    "#4cba06",
                    "#ffffff"
                ]
            }]
    };
    var myChart1 = new Chart(document.getElementById('myChart1'), {
        type: 'doughnut',
        data: data1,
        options: {
            responsive: true,
            legend: {
                display: false
            },
            cutoutPercentage: 80,
            maintainAspectRatio: false,
            tooltips: {
                enabled: false
            },
        }
    });
})
