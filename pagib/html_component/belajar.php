<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar HTML</title>
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
    <h3>Paragraf</h3>
    <p>ini paragraf 1,Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore soluta ad temporibus quas. Minima illum repellendus aperiam sapiente nemo? Ab dolorem suscipit laboriosam veritatis voluptates, quam tempora cumque incidunt cum.</p>
    <p>ini paragraf 2 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores ipsam fugit libero omnis neque maiores debitis obcaecati vero! Sunt, suscipit consequatur! Cupiditate dicta nisi ullam reiciendis alias eligendi, quasi aliquid?</p>

    <hr>
    <h3>Link</h3>
    <a href="https://www.youtube.com/">Ini link Biasa</a> <br>
    <a href="https://https://www.youtube.com" target="_blank" rel="noopener noreferrer">Link Blank</a> <br>
    <a href="file_excel.xlsx">Link Download Excel</a> <br>
    <a href="file_gambar.png">Link Download Gambar</a> <br>
    <a href="file_pdf.pdf">Link Download PDF</a>

    <hr>
    <h3>Gambar</h3>
    <img src="https://sttdumai.ac.id/assets/image/material/icon/logo.png" width="100"> <br>
    <img src="file_gambar.jpg" alt="" width="100">

    <hr>
    <h3>List</h3>
    <ul>
        <li>List 1</li>
        <li>List 2</li>
        <li>List 3</li>
        <li>List 4</li>
        <li>List 5</li>
    </ul>
    <ol>
        <li>List 1</li>
        <li>List 2</li>
        <li>List 3</li>
        <li>List 4</li>
        <li>List 5</li>
    </ol>
    <ol type="A">
        <li>List 1</li>
        <li>List 2</li>
        <li>List 3</li>
        <li>List 4</li>
        <li>List 5</li>
    </ol>

    <hr>
    <h3>Table</h3>

    <table border="1">
        <tr>
            <td rowspan="2">Kolom 1</td>
            <td>Kolom 2</td>
            <td colspan="2">Kolom 3</td>
        </tr>
        <tr>
            <td>Kolom 2</td>
            <td colspan="2">Kolom 3</td>
        </tr>

        <tr>
            <td>Isi kolom 1</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <br>

    <table border="1">
        <thead>
            <tr>
                <td rowspan="2">Kolom 1</td>
                <td>Kolom 2</td>
                <td colspan="2">Kolom 3</td>
            </tr>
            <tr>
                <td>Kolom 2</td>
                <td colspan="2">Kolom 3</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Isi kolom 1</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <td rowspan="2">Kolom 1</td>
                <td>Kolom 2</td>
                <td colspan="2">Kolom 3</td>
            </tr>
            <tr>
                <td>Kolom 2</td>
                <td colspan="2">Kolom 3</td>
            </tr>
        </tfoot>
    </table>

    <hr>
    <h3>Form Input</h3>
    <form action="">
        <input type="text" placeholder="Text"><br>
        <input type="password" placeholder="Password"><br>
        <input type="email" placeholder="Email"><br>
        <input type="number" placeholder="Number"><br>
        <input type="date"><br>
        <input type="color"><br>
        <input type="range"><br>
        <input type="checkbox"> Checkbox<br>
        <input type="radio"> Radio<br>
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



</body>

</html>