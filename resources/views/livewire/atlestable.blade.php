<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">Jahr</th>
                                    <th class="border-top-0">Anzahl</th>
                                    {{--number--}}
                                    <th class="border-top-0">Median</th>
                                    <th class="border-top-0">+/-(Vorjahr)</th>
                                    {{--Previous y--}}
                                    <th class="border-top-0">+/-(gasamt)</th>
                                    <th class="border-top-0">Arithm</th>
                                    <th class="border-top-0">+/-(Vorjahr)</th>
                                    <th class="border-top-0">+/-(gasamt)</th>
                                    <th class="border-top-0">Tago am Markt</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td>2021</td>
                                        <td>35</td>
                                        <td>5.969EUR</td>
                                        <td>+7.4</td>
                                        <td>+111.4</td>
                                        <td>6.067EUR</td>
                                        <td>+6.4</td>
                                        <td>+111.0</td>
                                        <td>29</td>
                                    </tr>
                                @endfor


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
</div>
