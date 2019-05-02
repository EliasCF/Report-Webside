<?php
    function random_date_in_range($date1, $date2){
        if (!is_a($date1, 'DateTime')) {
            $date1 = new DateTime( (ctype_digit((string)$date1) ? '@' : '') . $date1);
            $date2 = new DateTime( (ctype_digit((string)$date2) ? '@' : '') . $date2);
        }

        $random_u = random_int($date1->format('U'), $date2->format('U'));
        $random_date = new DateTime();
        $random_date->setTimestamp($random_u);
        return $random_date->format('Y-m-d');
    }
?>

<table>
    <thead>
        <tr>
            <th>Apple</th>
            <th>Amazon</th>
            <th>Alphabet Inc.</th>
            <th>Microsoft</th>
            <th>Alibaba Group</th>
            <th>Berkshire Hathaway</th>
            <th>Tencent Holdings</th>
            <th>JPMorgan Chase</th>
            <th>ExxonMobil</th>
            <th>Samsung Electronics</th>
            <th>Total</th>
            <th>Difference</th>
        </tr>
    </thead>
    <tbody>
        @foreach (range(1, 20) as $row_number)
            <tr>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                <td>{{random_date_in_range('2019-01-01', '2019-12-31')}}</td>
                @if (in_array($row_number, [1, 2]))
                    <td style="background-color: #d0211c;"> </td>
                    <td>{{random_date_in_range('2018-01-01', '2018-12-31')}}
                @endif
            </tr>
        @endforeach
    </tbody>
</table>