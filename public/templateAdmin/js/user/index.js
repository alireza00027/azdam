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
                    "#007BFF",
                    "#AAAAAA"
                ],
                hoverBackgroundColor: [
                    "#007BFF",
                    "#AAAAAA"
                ],
                hoverBorderColor: [
                    "#007BFF",
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
                    "#BB00FF",
                    "#AAAAAA"
                ],
                hoverBackgroundColor: [
                    "#BB00FF",
                    "#AAAAAA"
                ],
                hoverBorderColor: [
                    "#BB00FF",
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

    var data2 = {
        labels: [
            "درصد پیشرفت",
            ""
        ],
        datasets: [
            {
                data: [41, 59],
                backgroundColor: [
                    "#0E9F04",
                    "#AAAAAA"
                ],
                hoverBackgroundColor: [
                    "#0E9F04",
                    "#AAAAAA"
                ],
                hoverBorderColor: [
                    "#0E9F04",
                    "#ffffff"
                ]
            }]
    };
    var myChart2 = new Chart(document.getElementById('myChart2'), {
        type: 'doughnut',
        data: data2,
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

    var data3 = {
        labels: [
            "درصد پیشرفت",
            ""
        ],
        datasets: [
            {
                data: [41, 59],
                backgroundColor: [
                    "#FF5900",
                    "#AAAAAA"
                ],
                hoverBackgroundColor: [
                    "#FF5900",
                    "#AAAAAA"
                ],
                hoverBorderColor: [
                    "#FF5900",
                    "#ffffff"
                ]
            }]
    };
    var myChart3 = new Chart(document.getElementById('myChart3'), {
        type: 'doughnut',
        data: data3,
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

    var data4 = {
        labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
        datasets: [{
            label: 'پروژه 1',
            data: [10, 18, 38, 61, 87, 100, 65, 68, 72, 91, 96, 95, 80, 62],
            fill: false,
            borderColor: 'rgb(0, 123, 255)',
            tension: 0.1
        },
            {
                label: 'پروژه 2',
                data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(187, 0, 255)',
                tension: 0.1
            },
            {
                label: 'پروژه 3',
                data: [51, 43, 76, 67, 88, 91, 87, 60, 52, 45, 30, 28, 42, 55],
                fill: false,
                borderColor: 'rgb(14, 159, 4)',
                tension: 0.1
            },
            {
                label: 'پروژه 4',
                data: [43, 65, 67, 70, 75, 70, 61, 65, 70, 78, 80, 82, 86, 88],
                fill: false,
                borderColor: 'rgb(255, 89, 0)',
                tension: 0.1
            }]
    };
    var myChart4 = new Chart(document.getElementById('myChart4'), {
            type: 'line',
            data: data4,
            options: {
                legend: {
                    display: true,
                    position: 'bottom',
                    rtl: true,
                    labels: {
                        fontFamily: 'Vazir'
                    }
                },
                maintainAspectRatio: false,
                tooltips: {
                    enabled: true,
                    position: 'nearest',
                    intersect: false,
                    fontFamily: "arial",
                    titleFontFamily: 'Vazir',
                    bodyFontFamily: 'Vazir',
                    callbacks: {
                        label: (tooltipItems, data) => {
                            return tooltipItems.yLabel;
                        }
                    }
                },
                scales: {
                    xAxes: [{
                        type: 'category',
                        labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
                        ticks: {
                            fontFamily: 'Vazir',
                        },
                        gridLines : {
                            display : false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        },
                        ticks: {
                            min: 0,
                            callback: (value, index, values) => {
                                return value.toLocaleString('fa-IR').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                            },
                            fontFamily: 'Vazir'
                        }
                    }],
                }
            }
        });

})
