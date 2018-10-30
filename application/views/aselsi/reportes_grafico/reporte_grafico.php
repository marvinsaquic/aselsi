
<body>
    <canvas id="myChart" width="200" height="80"></canvas>
<script>

/*var paramNombres = [];
var paramEdades = [];

var bgColor = [];
var bgBorder = [];

$('#btnBuscar').click(function(){
    $.post("<?php echo base_url();?>crud_model/select_proveedor_info",
        function(data){
            var obj = JSON.parse(data);

            paramNombres = [];
            paramEdades = [];
            bgColor = [];
            bgBorder = [];
            $.each(obj, function(i,item){
                var r = Math.random() * 255;
                r = Math.round(r);

                var g = Math.random() * 255;
                g = Math.round(g);

                var b = Math.random() * 255;
                b = Math.round(b);

                paramNombres.push(item.nombre);
                paramEdades.push(item.edad);
                bgColor.push('rgba('+r+','+g+','+b+', 0.3)');
                bgBorder.push('rgba('+r+','+g+','+b+', 1)');
            });
            
            //Eliminamos y creamos la etiqueta canvas
            $('#myChart').remove();
            $('#contenedor_grafico').append("<canvas id='myChart' width='400' height='150'></canvas>");

            var ctx = $("#myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: paramNombres,
                    datasets: [{
                        label: 'Fechas',
                        data: paramEdades,
                        backgroundColor: bgColor,
                        borderColor: bgBorder,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
            
        });
});*/





var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Ibuprofeno", "Balsámico", "prueba", "otro", "Purple", "Orange"],
        datasets: [{
            label: 'Medicamentos',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

</body>