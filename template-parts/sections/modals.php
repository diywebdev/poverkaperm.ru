<!-- MODALS -->
<div class="fixed w-screen h-screen left-0 top-0 bg-black/70 z-20 overflow-x-hidden overflow-y-auto hidden modal-overlay" id="callback-modal" data-close>
	<div class="modal-content relative top-20 mb-10 left-1/2 translate-x-[-50%] -translate-y-10 transition-all duration-1000 max-w-xl w-full bg-white text-dark py-8 px-4 sm:p-8">
		<div class="w-10 h-10 flex items-center justify-center absolute right-0 top-0 opacity-50 transition-opacity hover:opacity-100 cursor-pointer rotate-45" data-close><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" data-close>
			<line y1="9.5" x2="20" y2="9.5" stroke="black" data-close/>
			<line x1="9.5" y1="20" x2="9.5" stroke="black" data-close/>
			</svg>
		</div>
		<h2 class="text-2xl font-bold text-center">Обратная связь</h2>
		<p class="text-center text-lg mb-10 font-normal">Оставьте свои данные и мы свяжемся с Вами</p>
		<form class="flex flex-col gap-4 sm:gap-5">
			<input type="hidden" name="form" value="">
			<input type="hidden" name="type" value="odn">
			<input type="text" name="address" class="border border-gray-900/50 transition-all focus:border-opacity-90 focus:border-gray-900 px-4 py-2 mb-1.5 sm:text-lg outline-none w-full" placeholder="Адрес">
			<div>
				<input type="tel" name="phone" class="border border-gray-900/50 transition-all focus:border-opacity-90 focus:border-gray-900 px-4 py-2 mb-1.5 sm:text-lg outline-none w-full" placeholder="+7 999 999-99-99 *">
				<div class="error-message text-xs text-accent hidden" id="phone">Веден некорректный номер телефона</div>
			</div>
			<textarea name="message" class="border border-gray-900/50 transition-all focus:border-opacity-90 focus:border-gray-900 px-4 py-2 mb-1.5 sm:text-lg outline-none w-full h-32 overflow-y-auto resize-none" placeholder="Ваше сообщение"></textarea>
			<label class="cursor-pointer flex items-center flex-wrap">
				<input type="checkbox" name="agree" class="absolute w-0 h-0 opacity-0 invisible">
				<div class="flex flex-wrap gap-x-2">
					<span class="fake-checkbox mt-0.5 w-4 h-4 inline-block flex-shrink-0 transition-all relative"></span>
					<span>Я согласен на</span> <a href="#policy-modal" class="popup-link text-blue underline transition-all hover:no-underline">обработку персональных данных</a>
				</div>
				<div class="error-message text-xs text-accent mt-1 w-full hidden" id="agree">Чтобы продолжить, установите флажок</div>
			</label>
			<input type="checkbox" name="subscribe" class="absolute w-0 h-0 opacity-0 invisible">
			<input type="submit" class="btn btn-accent" value="Отправить">
		</form>
	</div>
</div>
<div class="fixed w-screen h-screen left-0 top-0 bg-black/70 z-20 overflow-x-hidden overflow-y-auto hidden modal-overlay" id="more-modal" data-close>
	<div class="modal-content relative top-20 mb-10 left-1/2 translate-x-[-50%] -translate-y-10 transition-all duration-1000 max-w-2xl w-full bg-white text-dark py-8 px-4 sm:p-8">
		<div class="w-10 h-10 flex items-center justify-center absolute right-0 top-0 opacity-50 transition-opacity hover:opacity-100 cursor-pointer rotate-45" data-close><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" data-close>
			<line y1="9.5" x2="20" y2="9.5" stroke="black" data-close/>
			<line x1="9.5" y1="20" x2="9.5" stroke="black" data-close/>
			</svg>
		</div>
		<input type="hidden" name="type" value="odn">
		<h2 class="text-2xl font-bold text-center mb-10"></h2>
		<div class="more-info-content mb-10 text-[14px] sm:text-base"></div>
		<div class="text-center">
			<a href="#callback-modal" class="btn btn-accent mx-auto popup-link" data-title="" data-form="">Заказать</a>
		</div>
	</div>
</div>
<div class="fixed w-screen h-screen left-0 top-0 bg-black/70 z-30 overflow-x-hidden overflow-y-auto hidden modal-overlay" id="policy-modal" data-close>
	<div class="modal-content relative top-20 mb-10 left-1/2 translate-x-[-50%] -translate-y-10 transition-all duration-1000 max-w-5xl w-full bg-white text-dark py-8 px-4 sm:p-8">
		<div class="w-10 h-10 flex items-center justify-center absolute right-0 top-0 opacity-50 transition-opacity hover:opacity-100 cursor-pointer rotate-45" data-close><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" data-close>
			<line y1="9.5" x2="20" y2="9.5" stroke="black" data-close/>
			<line x1="9.5" y1="20" x2="9.5" stroke="black" data-close/>
			</svg>
		</div>
		<input type="hidden" name="type" value="odn">
		<h2 class="text-base sm:text-xl uppercase pb-4 mb-4 border-b border-gray-100 font-bold">Согласие на обработку персональных данных посетителей сайта</h2>
		<div class="">Настоящим в соответствии с <strong>Федеральным законом № 152-ФЗ</strong> «О персональных данных» от 27.07.2006 года Вы подтверждаете свое согласие на обработку компанией "Центр Метрологии" персональных данных: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, передачу исключительно в целях продажи программного обеспечения на Ваше имя, как это описано ниже, блокирование, обезличивание, уничтожение. <br><br> Компания "Центр Метрологии" гарантирует конфиденциальность получаемой информации. Обработка персональных данных осуществляется в целях эффективного исполнения заказов, договоров и иных обязательств, принятых компанией "Центр Метрологии" в качестве обязательных к исполнению. <br><br> В случае необходимости предоставления Ваших персональных данных правообладателю, дистрибьютору или реселлеру программного обеспечения в целях регистрации программного обеспечения на ваше имя, вы даёте согласие на передачу ваших персональных данных. Компания "Центр Метрологии" гарантирует, что правообладатель, дистрибьютор или реселлер программного обеспечения осуществляет защиту персональных данных на условиях, аналогичных изложенным в Политике конфиденциальности персональных данных. <br><br> Настоящее согласие распространяется на следующие Ваши персональные данные: фамилия, имя и отчество, адрес электронной почты, почтовый адрес доставки заказов, контактный телефон, платёжные реквизиты. <br><br> Срок действия согласия является неограниченным. Вы можете в любой момент отозвать настоящее согласие, направив письменное уведомления на адрес: г. Пермь, ул. Н. Островского, 49 с пометкой «Отзыв согласия на обработку персональных данных». <br><br> Обращаем ваше внимание, что отзыв согласия на обработку персональных данных влечёт за собой удаление Вашей учётной записи с Интернет-сайта (https://poverkaperm.ru/), а также уничтожение записей, содержащих ваши персональные данные, в системах обработки персональных данных компании "Центр Метрологии", что может сделать невозможным пользование интернет-сервисами компании "Центр Метрологии". <br><br> Гарантирую, что представленная мной информация является полной, точной и достоверной, а также что при представлении информации не нарушаются действующее законодательство Российской Федерации, законные права и интересы третьих лиц. Вся представленная информация заполнена мною в отношении себя лично. <br><br> Настоящее согласие действует в течение всего периода хранения персональных данных, если иное не предусмотрено законодательством Российской Федерации.<br></div>
	</div>
</div>
<div class="fixed w-screen h-screen left-0 top-0 bg-black/70 z-20 overflow-x-hidden overflow-y-auto hidden modal-overlay" id="message-modal" data-close>
	<div class="modal-content relative top-20 mb-10 left-1/2 translate-x-[-50%] -translate-y-10 transition-all duration-1000 max-w-xl w-full bg-white text-dark py-8 px-4 sm:p-8">
		<div class="w-10 h-10 flex items-center justify-center absolute right-0 top-0 opacity-50 transition-opacity hover:opacity-100 cursor-pointer rotate-45" data-close><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" data-close>
			<line y1="9.5" x2="20" y2="9.5" stroke="black" data-close/>
			<line x1="9.5" y1="20" x2="9.5" stroke="black" data-close/>
			</svg>
		</div>
		<p class="text-center text-lg"></p>
	</div>
</div>
<!-- MODALS END -->