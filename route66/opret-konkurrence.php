<!-- Kun HTML formularen -->

<form action="modtag.php" method="post">

<label for="question">
  Spørgsmålet: <input type="text" name="spørgsmål" placeholder="Spørgsmålet" id="question" required="required" />
</label>


<!-- disse svarmuligheder kan styres (tilføjes og fjernes) via jQuery -->
<div><!-- eller andet der adskiller svarmulighederne -->

  <!-- ved at tilføje "[]" efter hvad der står i name bliver det til et array -->
  Svarmulighed: <input type="text" name="svarmulighed[]" placeholder="Indtast en svarmulighed" required="required" />
  Er rigtig: <input type="radio" name="rigtig[]" required="required" />
  
</div>


<input type="submit" />

</form>
