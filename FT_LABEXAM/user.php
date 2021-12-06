<!DOCTYPE html>
<html>
    <body>
        <h1><b>Search Faculty</b></h1>
        <br>
        Search by Faculty Name:
        <br>
        <input type="text" name="name" id="name">
        <br>
        Search by Research Interset:
        <br>
        <input type="text" name="interset" id="interset">
        <br>
        Search by Designation:
        <br>
        <select id=designation>
				    <option value="">Select Designation
					<option value="Lecturer">Lecturer
					<option value="Assistant Professor">Assistant Professor
					<option value="Professor">Professor
			  </select>
        <br><br>
        <input type="submit" name="submit" onclick="MyAjaxFunc()">
        <p id="message"></p>
        <script src="../js/searchAjax.js"></script>
    </body>
</html>