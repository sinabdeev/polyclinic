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

	menu.addItem("jurnal", "�������", "�������",  null, null);
	menu.addItem("spravochniki", " �����������", " �����������",  null, null);
	menu.addItem("system", "�������", "�������",  null, null);

	menu.addSubItem("jurnal", "������", "������",  "index.php");
	menu.addSubItem("jurnal", "������������", "������������",  "remember.php");
	menu.addSubItem("jurnal", "�����", "�����",  "find.php");
	menu.addSubItem("jurnal", "����� �������", "����� �������",  "money.php");
	menu.addSubItem("jurnal", "������� � ��������", "������� � ��������",  "dejurstvo.php");

	
	
	menu.addSubItem("spravochniki", "����������", "����������",  "sotrudniki.php");
	menu.addSubItem("spravochniki", "��������", "��������",  "diagnoz.php");
	menu.addSubItem("spravochniki", "�������", "�������",  "vakcina.php");
	menu.addSubItem("spravochniki", "���� ��������", "���� ��������",  "vid_jivot.php");
	menu.addSubItem("spravochniki", "������ ��������", "������ ��������",  "kind_jivot.php");

	menu.addSubItem("system", "������", "������",  "insert.php");
	menu.addSubItem("system", "������ ��", "������ ��",  "insert_p.php");
	

	
	menu.showMenu();
}