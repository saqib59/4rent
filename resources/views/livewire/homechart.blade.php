<div>
    <div class="row">
        <div class="col-md-6 col-lg-7 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Mieteinnahmen</h3>

                <div id="ct-visits" style="height: 405px;">
                    <div class="chartist-tooltip" style="top: -17px; left: -12px;">
                        <span class="chartist-tooltip-value">6</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-5 col-sm-12 col-xs-12">
            <div class="white-box">
                <div id='calendar'></div>
            </div>
        </div>
    </div>

</div>

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js"></script>

    <script>

        var events = []

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',

                    events: [
                        @forEach($notice as $no)
                        {
                            title : '{{$no->body}}',
                            start: '{{$no->date}}'
                        },

                        @endforeach
                    ]
            });
            calendar.render();
        });
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        const month = [];
        const income = [];
    @foreach($income_ranges as $income_range)
        income.push({{$income_range->total}})
        month.push(monthNames[{{$income_range->month}} - 1])
        @endforeach


        $(function () {
            "use strict";
            // ==============================================================
            // Newsletter
            // ==============================================================
            console.log(month.reverse())
            console.log(income.reverse())
            //ct-visits
            new Chartist.Line('#ct-visits', {

                labels:month,
                series: [
                    income
                    // , [2, 5, 2, 6, 2, 5, 2, 4]
                ]
            }, {
                top: 0,
                low: 1,
                showPoint: true,
                fullWidth: true,
                plugins: [
                    Chartist.plugins.tooltip()
                ],
                axisY: {
                    labelInterpolationFnc: function (value) {
                        return (value / 1) + 'k';
                    }
                },
                showArea: true
            });



            var chart = [chart];

            var sparklineLogin = function () {
                $('#sparklinedash').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                    type: 'bar',
                    height: '30',
                    barWidth: '4',
                    resize: true,
                    barSpacing: '5',
                    barColor: '#7ace4c'
                });
                $('#sparklinedash2').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                    type: 'bar',
                    height: '30',
                    barWidth: '4',
                    resize: true,
                    barSpacing: '5',
                    barColor: '#7460ee'
                });
                $('#sparklinedash3').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                    type: 'bar',
                    height: '30',
                    barWidth: '4',
                    resize: true,
                    barSpacing: '5',
                    barColor: '#11a0f8'
                });
                $('#sparklinedash4').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                    type: 'bar',
                    height: '30',
                    barWidth: '4',
                    resize: true,
                    barSpacing: '5',
                    barColor: '#f33155'
                });
            }
            var sparkResize;
            $(window).on("resize", function (e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineLogin, 500);
            });
            sparklineLogin();
        });



    </script>
@endsection
