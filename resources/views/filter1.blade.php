@include('layout.header')


<div>
    <center>
        <h1><img height="70" width="70" src="{{ asset('/gambar/bengkulu.png') }}">&nbsp&nbspTARGET VAKSINASI TAHAP
            III PROVINSI BENGKULU&nbsp&nbsp<img height="70" width="70"
                src="{{ asset('/gambar/bengkulu.png') }}">&nbsp&nbsp</h1>
    </center>
    <hr />
</div>
<br>
<div class="card-image-overlay">


    <form action="{{ url('filtertanggal1/proses1') }}" method="GET">
        <center><label>Target Tanggal Awal : </label>
            <input type="date" name="tanggal_awal" required></input><br><br>
            <label>Target Tanggal Akhir : </label>
            <input type="date" name="tanggal_akhir" required></input><br><br>

            <input type="submit" value="proses">
            <a href="{{ route('homeadmin') }}"><button type="button">Kembali</button></a>

    </form>



    <div class="card-footer">
        <center>
            <br><br>
            <table border="1">
                <tr>
                    <th>Tanggal</th>
                    <th>Kabupaten</th>
                    <th>Lansia</th>
                    <th>ODGJ</th>
                    <th>Disabilitas</th>
                    <th>Belum Divaksin</th>
                    <th>Centroid 1</th>
                    <th>Centroid 2</th>
                    <th>Zona</th>
                </tr>
                <?php
                $c1a = 100;
                $c1b = 50;

                $c2a = 50;
                $c2b = 0;

                $c1a_b = "";
                $c1b_b = "";

                $c2a_b = "";
                $c2b_b = "";

                $hc1 = 0;
                $hc2 = 0;

                $no = 0;
                $arr_c1 = array();
                $arr_c2 = array();

                $arr_c1_temp = array();
                $arr_c2_temp = array();
                $zz = array();
                $zzz = array();
                $zzzz = array();
                $zzzzz = array();
                $zzzzzz = array();
                $zzzzzzz = array();

                foreach ($filter as $s) {

                ?>
                <tr>
                    <th><?php echo $s->tanggal; ?></th>
                    <th><?php echo $s->nama; ?></th>
                    <th><?php echo $s->tlansia; ?>%</th>
                    <th><?php echo $s->todgj; ?>%</th>
                    <th><?php echo $s->tdisabilitas; ?>%</th>
                    <th><?php echo $s->bvaksin; ?>%</th>

                    <?php
                    $z = $s->bvaksin;
                    $b = 0;
                    array_push($zz, $z);
                    for ($i = 0; $i < count($zz); $i++) {
                        if ($i == 0) {
                            if ($zz[$i] >= 10) {
                                $hc1 = ((float) $zz[$i] + 100) / 2;
                                $b = $hc1;
                            } else {
                                $hc1 = 100;
                                $b = $hc1;
                            }
                        } else {
                            if ($zz[$i] >= 30) {
                                $hc1 = ((float) $zz[$i] + $b) / 2;
                                $b = $hc1;
                            } else {
                                $hc1 = $b;
                            }
                        }
                    }
                    ?>

                    {{-- //centroid 2 k-means --}}
                    <?php
                    $z = $s->bvaksin;
                    $b = 0;
                    array_push($zzz, $z);
                    for ($i = 0; $i < count($zzz); $i++) {
                        if ($i == 0) {
                            if ($zzz[$i] <= 10) {
                                $hc2 = ((float) $zzz[$i] + 100) / 2;
                                $b = $hc2;
                            } else {
                                $hc2 = 100;
                                $b = $hc2;
                            }
                        } else {
                            if ($zzz[$i] < 30) {
                                $hc2 = ((float) $zzz[$i] + $b) / 2;
                                $b = $hc2;
                            } else {
                                $hc2 = $b;
                            }
                        }
                    }
                    ?>

                    {{-- //centroid 1 constrained --}}

                    <th><?php
                    $z = $s->bvaksin / $jumlah;
                    $b = 0;
                    array_push($zzzz, $z);
                    for ($i = 0; $i < count($zzzz); $i++) {
                        if ($i == 0) {
                            if ($zz[$i] >= 10) {
                                $hc1 = ((float) $zzzz[$i] + 100) / 2;
                                $b = $hc1;
                            } else {
                                $hc1 = 100;
                                $b = $hc1;
                            }
                        } else {
                            if ($zz[$i] >= 30) {
                                $hc1 = ((float) $zzzz[$i] + $b) / 2;
                                $b = $hc1;
                            } else {
                                $hc1 = $b;
                            }
                        }
                    }
                    echo $hc1;
                    ?></th>

                    {{-- //centroid 2 constrained --}}

                    <th><?php
                    $z = $s->bvaksin / $jumlah;
                    $b = 0;
                    array_push($zzzzz, $z);
                    for ($i = 0; $i < count($zzzzz); $i++) {
                        if ($i == 0) {
                            if ($zz[$i] <= 10) {
                                $hc2 = ((float) $zzzzz[$i] + 100) / 2;
                                $b = $hc2;
                            } else {
                                $hc2 = 100;
                                $b = $hc2;
                            }
                        } else {
                            if ($zz[$i] < 30) {
                                $hc2 = ((float) $zzzzz[$i] + $b) / 2;
                                $b = $hc2;
                            } else {
                                $hc2 = $b;
                            }
                        }
                    }
                    echo $hc2;
                    ?></th>
                    

                            {{-- //centroid 1 boosted --}}
                            <?php
                            
                            //k adalah nilai < 50 dari bvaksin
                            //j adalah nilai > 50 dari bvaksin
                            //centroid 1
                            $jzona = $k + $j;
                            $nbobot = 1 / $jumlah;
                            $errorrate = $k / $jumlah;
                            $bobotsuara = log((1 - $errorrate) / $errorrate);
                            $bobotbaru = $nbobot * $bobotsuara;
                            $databaru = $nbobot * $jzona + $bobotbaru * $k;
                            $normal = $bobotbaru / $databaru;
                            
                            $z = $s->bvaksin;
                            $b = 0;
                            array_push($zzzzzz, $z);
                            for ($i = 0; $i < count($zzzzzz); $i++) {
                                if ($i == 0) {
                                    if ($zz[$i] >= 10) {
                                        $hc1 = ((float) $zzzzzz[$i] + $normal) / 2;
                                        $b = $hc1;
                                    } else {
                                        $hc1 = $normal;
                                        $b = $hc1;
                                    }
                                } else {
                                    if ($zz[$i] >= 30) {
                                        $hc1 = ((float) $zzzzzz[$i] + $normal) / 2;
                                        $b = $hc1;
                                    } else {
                                        $hc1 = $b;
                                    }
                                }
                            }
                            
                            ?>

                            {{-- //centroid 2 boosted --}}

                            <?php
                            
                            //centroid 2
                            //kz nilai bvaksin dibawah 50
                            $bbaru = $k + $j;
                            $nbobot1 = 1 / $jumlah;
                            $errorrate1 = $j / $jumlah;
                            $bobotsuara1 = log((1 - $errorrate1) / $errorrate1);
                            $bobotbaru1 = $nbobot1 * $bobotsuara;
                            $databaru1 = $nbobot1 * $bbaru + $bobotbaru1 * $j;
                            $normal1 = $bobotbaru1 / $databaru1;
                            
                            $z = $s->bvaksin;
                            $b = 0;
                            array_push($zzzzzzz, $z);
                            for ($i = 0; $i < count($zzzzzzz); $i++) {
                                if ($i == 0) {
                                    if ($zz[$i] <= 10) {
                                        $hc2 = ((float) $zzzzzzz[$i] + $normal1) / 2;
                                        $b = $hc2;
                                    } else {
                                        $hc2 = $normal1;
                                        $b = $hc2;
                                    }
                                } else {
                                    if ($zz[$i] < 30) {
                                        $hc2 = ((float) $zzzzzzz[$i] + $normal1) / 2;
                                        $b = $hc2;
                                    } else {
                                        $hc2 = $b;
                                    }
                                }
                            }
                            
                            ?>


                            <?php
                            
                            if ($hc1 <= $hc2) {
                                $arr_c1[$no] = 1;
                            } else {
                                $arr_c1[$no] = 0;
                            }
                            if ($hc2 <= $hc1) {
                                $arr_c2[$no] = 1;
                            } else {
                                $arr_c2[$no] = 0;
                            }
                            
                            $arr_c1_temp[$no] = $s->bvaksin;
                            $arr_c2_temp[$no] = $s->bvaksin;
                            
                            $warna1 = '';
                            $warna2 = '';
                            ?>
                            <?php if ($arr_c1[$no] == 1) {
                                $warna1 = '#FFFF00';
                            } else {
                                $warna1 = '#ccc';
                            } ?>
                   
            <th>
                        <?php
                        if ($s->bvaksin <= 20) {
                            echo 'Zona Hijau';
                        } elseif ($s->bvaksin >= 21 && $s->bvaksin <= 50) {
                            echo 'Zona Kuning';
                        } elseif($s->bvaksin>=51 && $s->bvaksin <=80) {
                            echo 'Zona Orange';
                        }elseif($s->bvaksin>=81 && $s->bvaksin <=100) {
                            echo 'Zona Merah';
                        }
                        ?> </th>   
            </tr>
                <?php

                    $q = "insert into centroid_temp(iterasi,c1,c2) values(1,'" . $arr_c1[$no] . "','" . $arr_c2[$no] . "')";

                    $no++;
                }



                ?>
            </table>
        </center>

        <br>
        Halaman : {{ $filter->currentPage() }} <br />
        Jumlah Data : {{ $filter->total() }} <br />
        Data Per Halaman : {{ $filter->perPage() }} <br />

        <center>
            {{ $filter->links() }}
        </center>

    </div>

</div>
</div>






@include('layout.footerdata')
