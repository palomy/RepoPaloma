<html>
	<body>
		<table>
			<tr>
			<?php echo $form->renderFormTag(url_for('@libroform'));?>
			
			<?php echo $form;?>
			</tr>
			<tr>
				<td><input type="submit" value="Enviar"/></td>
			</tr>
			<!--foreach($form as $valor):?>
					<tr> 
						<td>  //echo $valor->getName(); ?> </td>
						<td>  //echo $valor;?></td>
					</tr>-->
			
			</table>
		</form>
	</body>
</html>