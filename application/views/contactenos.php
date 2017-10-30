<form  class="contact_form" action="#" id="contact_form" runat="server">
	<div>
	    <ul>
	        <li>
	            <h2>Contactos</h2>
	            <span class="required_notification">* Datos requeridos</span>
	        </li>
	        <li>
	            <label for="name">Nombre:</label>
	            <input type="text" placeholder="" required />
	        </li>
	        <li>
	            <label for="email">Email:</label>
	            <input type="email" name="email" placeholder="" required />
	            <span class="form_hint">Formato correcto: "name@something.com"</span>
	        </li>
	        <li>
	            <label for="website">Sitio web:</label>
	            <input type="url" name="website" placeholder="" required pattern="(http|https)://.+" />
	            <span class="form_hint">Formato correcto: "http://developerji.com"</span>
	        </li>
	        <li>
	            <label for="message">Mensaje:</label>
	            <textarea name="message" cols="40" rows="6" required></textarea>
	        </li>
	        <li>
	            <button class="submit" type="submit">Enviar mensaje</button>
	        </li>
	    </ul>
	</div>
</form>
