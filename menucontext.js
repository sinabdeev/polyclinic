function showToolbar()
{
// AddItem(id, text, hint, location, alternativeLocation);
// AddSubItem(idParent, text, hint, location);

	menu = new Menu();

	menu.addItem("sp1", "", "",  null, null);
	menu.addItem("sp2", "", "",  null, null);
	menu.addItem("sp3", "", "",  null, null);
	menu.addItem("sp4", "", "",  null, null);
	menu.addItem("sp5", "", "",  null, null);
	menu.addItem("sp6", "", "",  null, null);
	menu.addItem("sp7", "", "",  null, null);
	menu.addItem("sp8", "", "",  null, null);
	menu.addItem("sp9", "", "",  null, null);

	menu.addItem("jurnal", "Клиенты", "Клиенты",  null, null);
	menu.addItem("spravochniki", " Справочники", " Справочники",  null, null);
	menu.addItem("system", "Система", "Система",  null, null);

	menu.addSubItem("jurnal", "Журнал", "Журнал",  "index.php");
	menu.addSubItem("jurnal", "Напоминатель", "Напоминатель",  "remember.php");
	menu.addSubItem("jurnal", "Поиск", "Поиск",  "find.php");
	menu.addSubItem("jurnal", "Общая выручка", "Общая выручка",  "money.php");
	menu.addSubItem("jurnal", "Выручка с дежурств", "Выручка с дежурств",  "dejurstvo.php");

	
	
	menu.addSubItem("spravochniki", "Сотрудники", "Сотрудники",  "sotrudniki.php");
	menu.addSubItem("spravochniki", "Диагнозы", "Диагнозы",  "diagnoz.php");
	menu.addSubItem("spravochniki", "Вакцины", "Вакцины",  "vakcina.php");
	menu.addSubItem("spravochniki", "Виды животных", "Виды животных",  "vid_jivot.php");
	menu.addSubItem("spravochniki", "Породы животных", "Породы животных",  "kind_jivot.php");

	menu.addSubItem("system", "Импорт", "Импорт",  "insert.php");
	menu.addSubItem("system", "Импорт ПО", "Импорт ПО",  "insert_p.php");
	

	
	menu.showMenu();
}