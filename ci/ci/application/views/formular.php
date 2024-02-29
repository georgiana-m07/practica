<h2>{TITLE}</h2>
		<form method="post" action="{SITE_URL}/welcome/procesare_formular">
			<table>
				<tr>
					<td class="textVerde" id="boxUser" style="text-decoration:underline">User</td>
					<td><input type="text" name="user" placeholder="Username" /></td>
				</tr>
				<tr>
					<td class="textVerde">Parola</td>
					<td><input type="password" name="pass"/></td>
				</tr>				
				<tr>
					<td>Varsta</td>
					<td><input type="number" step="2" name="varsta"/></td>
				</tr>				
				<tr>
					<td>Newsletter</td>
					<td><input type="checkbox" value="1" name="newsletter"/></td>
				</tr>				
				<tr>
					<td>Culoare</td>
					<td><input type="radio" value="rosu" name="culoare"/> Rosu<br/>
						<input type="radio" value="albastru" name="culoare"/> Albastru
					</td>
				</tr>		
				
				<tr>
					<td>Oras</td>
					<td>
						<select name="oras">
							<option value="1">Timisoara</option>
							<option value="2">Constanta</option>
							<option value="3">Iasi</option>
						</select>
					</td>
				</tr>				
				<tr>
					<td class="textVerde" >Comentariu</td>
					<td>
						<textareaname="comentariu" rows="7" cols="40"></textarea>
					</td>
				</tr>		
								
				<tr>
					<input type="hidden" name="zi" value="1"/>
					<td colspan="2"><input type="submit" value="Salveaza" />
					<br/>
					<input type="reset" value="Reseteaza" />
					<input type="button" value="Apasa-ma!"/>
					
					</td>
				</tr>
			</table>
		</form>