<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $template['title']; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>">Codeigniter KRS</a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url(); ?>index.php/mahasiswa">Mahasiswa</a></li>
                    <li><a href="<?= base_url(); ?>index.php/matakuliah">Mata Kuliah</a></li>
                    <li><a href="<?= base_url(); ?>index.php/krs">Pengisian KRS</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    
    <div class="container">
        <?php echo $template['body']; ?>
    </div>
    


    <script src="<?= base_url(); ?>assets/js/jquery-2.2.0.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var jumlahsks=0;
        var tmp=0;
        $(':checkbox').click(function(){
            if ($(this).is(":checked") == true ){
                var tmp=parseInt($(this).attr('title'));
                jumlahsks = jumlahsks + tmp;
                if(jumlahsks > 24){
                    alert('PERINGATAN :\n SKS saudara sudah lebih dari 24 SKS\n Pemilihan mata kuliah terakhir dibatalkan');
                    $(this).attr("checked", false);
                    jumlahsks=jumlahsks-tmp; 
                    
                }
                var elem = document.getElementById("sks");
                elem.value = jumlahsks;
                            
            } else {
                var tmp=parseInt($(this).attr('title'));
                jumlahsks = jumlahsks-tmp;
                var elem = document.getElementById("sks");
                elem.value = jumlahsks;
            }
        });
    });
    jumlahsks=0;
    </script>
</body>
</html>