<head>
	<title>
		Edit New Blog Post
	</title>
</head>

<body>
	<form method="POST">
		<table align="center">
			<h1 align="center">Edit New Blog Post</h1>
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
				<td> Published At	</td>
				<td>
					<input type="text" name="publishedat" id="publishedat">
				</td>
				<td>
					<label name="publishedaterror" id="publishedaterror">
				</td>
			</tr>
			<tr>
				<td> Category </td>
				<td>
					<input type="checkbox" name="category[]" id="lifestyle" value="lifestyle">Lifestyle<br>
					<input type="checkbox" name="category[]" id="health" value="health">Health<br>
					<input type="checkbox" name="category[]" id="education" value="education">Education<br>
					<input type="checkbox" name="category[]" id="music" value="music">Music<br>
				</td>
				<td>
					<label name="categoryerror" id="categoryerror">
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