<head>
	<title>
		Add New Category
	</title>
</head>

<body>
	<form method="POST">
		<table align="center">
			<h1 align="center">Add New Category</h1>
			<tr>
				<td> Title </td>
				<td>
					<input type="text" name="title" id="title">
				</td>
				<td>
					<label name="titleerror" id="titleerror">
				</td>
			</tr>
			<tr>
				<td> Content </td>
				<td>
					<textarea type="text" name="content" id="content"></textarea>
				</td>
				<td>
					<label name="contenterror" id="contenterror">
				</td>
			</tr>
			<tr>
				<td> URL </td>
				<td>
					<input type="text" name="url" id="url">
				</td>
				<td>
					<label name="urlerror" id="urlerror">
				</td>
			</tr>
			<tr>
				<td> Meta Title	</td>
				<td>
					<input type="text" name="metatitle" id="metatitle">
				</td>
				<td>
					<label name="metatitleerror" id="metatitleerror">
				</td>
			</tr>
			<tr>
				<td> Parent Category </td>
				<td>
					<input type="text" name="parentcategory" id="parentcategory">
				</td>
				<td>
					<label name="parentcategoryerror" id="parentcategoryerror">
				</td>
			</tr>
			<tr>
				<td> Image	</td>
				<td>
					<input type="file" name="imageToUpload" id="imageToUpload">
				</td>
				<td>
					<label name="imageerror" id="imageerror">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit" id="submit">SUBMIT</button></td>
			</tr>
		</table>
	</form>	
</body>