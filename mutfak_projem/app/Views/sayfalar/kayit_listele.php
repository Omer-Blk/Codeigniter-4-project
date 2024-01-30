<table class="table" style="margin-left: 50px; margin-top: 25px; margin-bottom: 100px;">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Başlık</th>
            <th scope="col">URL</th>
            <th scope="col">Düzenleme</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($kayitlar) && count($kayitlar) > 0)

            foreach ($kayitlar as $item) {
                echo '<tr>';
                echo '<th scope="row">' . $item['id'] . '</th>';
                echo '<td>' . $item['baslik'] . '</td>';
                echo '<td>' . $item['url'] . '</td>';
                echo '<td>';
                echo '<a class="btn btn-danger" href ="' . base_url('kayit_sil/' . $item['id']) . '">Sil</a> ';
                echo '<a class="btn btn-primary" href ="' . base_url('kayit_duzenle/' . $item['id']) . '">Düzenle</a>';
                echo '</td>';
                echo '</tr>';
            }

        else {
            echo 'Kayıt YOK';
        }
        ?>
    </tbody>
</table>