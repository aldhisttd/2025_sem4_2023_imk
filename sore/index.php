<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komponen HTML</title>
</head>
<body style="padding-bottom: 200px;">

    <h3>Heading</h3>
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>

    <hr>
    <h3>Link</h3>
    <a href="https://sttdumai.ac.id">Ini link biasa</a> <br>
    <a href="https://sttdumai.ac.id" target="_blank">Ini link new Tab</a> <br>
    <a href="https://sttdumai.ac.id/assets/image/material/icon/logo.png">Link Download Gambar</a> <br>
    <a href="file_excel.xlsx">Link Download File Excel</a> <br>
    <a href="file_pdf.pdf">Link Download Pdf</a> <br>

    <hr>
    <h3>Gambar</h3>
    <img src="https://sttdumai.ac.id/assets/image/material/icon/logo.png" width="50"> <br>
    <img src="file_gambar.jpg" width="100">

    <hr>
    <h3>List</h3>
    <ul>
        <li>ini list 1</li>
        <li>ini list 2</li>
        <li>ini list 3</li>
    </ul>

    <ol>
        <li>ini list 1</li>
        <li>ini list 2</li>
        <li>ini list 3</li>
    </ol>

    <ol type="a">
        <li>ini list 1</li>
        <li>ini list 2</li>
        <li>ini list 3</li>
    </ol>

    <ol type="i">
        <li>ini list 1</li>
        <li>ini list 2</li>
        <li>ini list 3</li>
    </ol>

    <hr>
    <h3>Tabel</h3>

    <table border="1">
        <tr>
            <td>Kolom 1</td>
            <td>Kolom 2</td>
            <td>Kolom 3</td>
        </tr>
        <tr>
            <td>Kolom 1</td>
            <td>Kolom 2</td>
            <td>Kolom 3</td>
        </tr>
    </table>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kolom 1</td>
                <td>Kolom 2</td>
                <td>Kolom 3</td>
            </tr>
            <tr>
                <td>Kolom 1</td>
                <td>Kolom 2</td>
                <td>Kolom 3</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
            </tr>
        </tfoot>
    </table>

    <br>
    <table border="1">
        <tr>
            <td rowspan="2">No</td>
            <td rowspan="2">Nama</td>
            <td rowspan="2">Alamat</td>
            <td colspan="2">Deskripsi</td>
            <!-- <td></td> -->
        </tr>
        <tr>
            <!-- <td>kolom</td> -->
            <!-- <td>kolom</td> -->
            <!-- <td>kolom</td> -->
            <td>kolom</td>
            <td>kolom</td>
        </tr>
    </table>

    <hr>
    <h3>Form</h3>

    <form action="">
        <input type="text" placeholder="Text"><br>
        <input type="password" placeholder="Password"><br>
        <input type="email" placeholder="Email"><br>
        <input type="number" placeholder="Number"><br>
        <input type="date"><br>
        <input type="color"><br>
        <input type="range"><br>
        <input type="checkbox"> Checkbox<br>
        <input type="radio" name="gender"> Laki2<br>
        <input type="radio" name="gender"> Perempuan<br>
        <input type="file"><br>
        <input type="submit" value="Submit"><br>
        <input type="reset" value="Reset"><br>
        <input type="button" value="Button"><br>
        <textarea rows="4" cols="50">Ini adalah textarea.</textarea> <br>
        <select>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
    </form>

    <hr>
    <h3>iFrame</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/JgccvZkTVaw?si=6UAvSdTPoFSKhQLH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>





</body>
</html>