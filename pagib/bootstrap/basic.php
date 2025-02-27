<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Belajar HTML - Semua Element</h1>

    <h3>Paragraf</h3>
    <p>Ini adalah contoh paragraf.</p>
    <hr>

    <h3>Heading</h3>
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
    <hr>

    <h3>Link</h3>
    <a href="https://www.example.com">Ini adalah link</a>
    <hr>

    <h3>Gambar</h3>
    <img src="../html_component/file_gambar.jpg" alt="Contoh Gambar" class="img-fluid">
    <hr>

    <h3>List Tidak Berurutan (Unordered List)</h3>
    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ul>
    <hr>

    <h3>List Berurutan (Ordered List)</h3>
    <ol>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ol>
    <hr>

    <h3>Tabel</h3>
    <table class="table table-striped table-hover">
        <tr class="table-primary">
            <th>Header 1</th>
            <th>Header 2</th>
        </tr>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
        </tr>
        <tr>
            <td class="table-danger">Data 3</td>
            <td>Data 4</td>
        </tr>
    </table>
    <hr>

    <h3>Form</h3>

    <div>
        <label for="" class="form-label">Input</label>
        <input type="text" class="form-control">
    </div>
    <hr>
    <form action="/submit" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
    <hr>

    <h3>Tombol</h3>
    <button>Ini adalah tombol</button>
    <hr>

    <h3>Text Formatting</h3>
    <p><b>Teks tebal</b>, <i>teks miring</i>, <u>teks bergaris bawah</u>, <s>teks tercoret</s>, <mark>teks ditandai</mark>, <small>teks kecil</small>, <sup>superscript</sup>, <sub>subscript</sub>.</p>
    <hr>

    <h3>Blockquote</h3>
    <blockquote>
        Ini adalah contoh blockquote. Biasanya digunakan untuk kutipan.
    </blockquote>
    <hr>

    <h3>Preformatted Text</h3>
    <pre>
        Ini adalah teks preformatted.
        Teks ini akan menampilkan spasi dan line break secara literal.
    </pre>
    <hr>

    <h3>Code</h3>
    <p>Ini adalah contoh kode: <code>&lt;div&gt;</code></p>
    <hr>

    <h3>Div dan Span</h3>
    <div>Ini adalah div, sebuah block-level element.</div>
    <span>Ini adalah span, sebuah inline-level element.</span>
    <hr>

    <h3>Iframe</h3>
    <iframe src="https://www.example.com" width="300" height="200"></iframe>
    <hr>

    <h3>Audio</h3>
    <audio controls>
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung elemen audio.
    </audio>
    <hr>

    <h3>Video</h3>
    <video controls width="300">
        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        Browser Anda tidak mendukung elemen video.
    </video>
    <hr>

    <h3>Canvas</h3>
    <canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;">
        Browser Anda tidak mendukung elemen canvas.
    </canvas>
    <hr>

    <h3>SVG</h3>
    <svg width="100" height="100">
        <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
    </svg>
    <hr>

    <h3>Details dan Summary</h3>
    <details>
        <summary>Klik untuk melihat detail</summary>
        <p>Ini adalah konten yang disembunyikan.</p>
    </details>
    <hr>

    <h3>Progress</h3>
    <progress value="50" max="100"></progress>
    <hr>

    <h3>Meter</h3>
    <meter value="2" min="0" max="10">2 out of 10</meter>
    <hr>

    <h3>Input Type</h3>
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
    <hr>

    <h3>Textarea</h3>
    <textarea rows="4" cols="50">Ini adalah textarea.</textarea>
    <hr>

    <h3>Select dan Option</h3>
    <select>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
    </select>
    <hr>

    <h3>Fieldset dan Legend</h3>
    <fieldset>
        <legend>Informasi Pribadi</legend>
        Nama: <input type="text"><br>
        Email: <input type="email">
    </fieldset>
    <hr>

    <h3>Label</h3>
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <hr>

    <h3>Datalist</h3>
    <input list="browsers" name="browser">
    <datalist id="browsers">
        <option value="Chrome">
        <option value="Firefox">
        <option value="Safari">
        <option value="Edge">
        <option value="Opera">
    </datalist>
    <hr>

    <h3>Output</h3>
    <form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
        <input type="number" id="a" value="0"> +
        <input type="number" id="b" value="0"> =
        <output name="result" for="a b">0</output>
    </form>
    <hr>

    <h3>Sectioning Elements</h3>
    <header>Ini adalah header</header>
    <nav>Ini adalah nav</nav>
    <section>Ini adalah section</section>
    <article>Ini adalah article</article>
    <aside>Ini adalah aside</aside>
    <footer>Ini adalah footer</footer>
    <hr>

    <h3>Semantic Elements</h3>
    <main>Ini adalah main</main>
    <figure>
        <img src="https://via.placeholder.com/150" alt="Contoh Gambar">
        <figcaption>Ini adalah figcaption</figcaption>
    </figure>
    <time datetime="2023-10-01">1 Oktober 2023</time>
    <hr>

    <h3>Entities</h3>
    <p>&lt; &gt; &amp; &quot; &apos; &copy; &reg;</p>
    <hr>

    <h3>Comments</h3>
    <!-- Ini adalah komentar, tidak akan ditampilkan di browser -->
    <p>Lihat kode sumber untuk melihat komentar.</p>
    <hr>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>