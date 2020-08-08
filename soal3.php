<!DOCTYPE html>
<html>
<head>
	<title>Soal3</title>
</head>
<body>
	<script type="text/javascript">
		  for( i=1; i<=8; i++)
     {
         for( j=1; j<=8; j++)
             {
                 if (i==1||j==3||j==6 || i==8)
                 {
                    document.write(" * ");
                 }
                 else
                 {
                    document.write(" = ");
                 }
             }
               document.write("<br>");
     }
	</script>
</body>
</html>