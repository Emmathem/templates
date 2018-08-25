    <footer>
        <div class = "inner-footer">
            <?= date('Y') .' Emmathem Concepts' ?>
        </div>
    </footer>
    <script src = "assets/js/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="crop-select-js.min.js"></script>
    <script src = "assets/js/bootstrap.min.js"></script>
    <script src = "assets/js/city.json"></script>
    <script src = "assets/js/wawooh.js"></script>
    <script>
        $(function(){
            $('#crop-select').CropSelctJs({
                imageSrc: 'image.jpeg'
            })
        })
    </script>
</body>
</html>
