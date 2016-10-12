<?php
    require_once('connexion.php');
    class Article
	{
		private $id_article;
		private $titre;
		private $description;
		
		public function __construct($id_article,$titre,$description)
		{
			$this->id_article=$id_article;
			$this->titre=$titre;
			$this->description=$description;
		}
		
		public function getId_article()
		{
			return $this->id_article;
		}
		
		public function getTitre()
		{
			return $this->titre;
		}
		
		public function getDescription()
		{
			return $this->description;
		}
		
		public function setDescription($description)
		{
			$this->description=$description;
		}
		
		public function setTitre($titre)
		{
			$this->titre=$titre;
		}
		
		public function setId_article($id_article)
		{
			$this->id_article=$id_article;
		}
		
		public function ajouterArticle($id_article,$titre,$description)
		{
			$sql="insert into Article values('$id_article','$titre','$description',2016)";
			global $con;
			$res=$con->exec($sql);
			if($res!=0)
			{
				echo "<script>alert('cet article est déj$ ajouté')</script>";
			}
			else
			{
				echo "<script>alert('cet article est déj$ ajouté')</script>";
			}
		}
		
		public function afficherArticle()
		{
			$sql="select * from article";
			global $con;
			$res=$con->query($sql);
			while($tab=$res->fetch(PDO::FETCH_NUM))
			{
				echo '<fieldset>';
				echo '<legend>'.$tab[1].'</legend>';
				echo '<p>'.$tab[2].'</p>';
				echo '</fieldset>';
			}
			echo '<br>';
		}
		
		public function toString()
		{
			return $this->id_article.' '.$this->titre.' '.$this->description;
		}
		
	}
	
	//$ar=new Article(1,'test','je suis en train d ecrire article');
	//$ar->ajouterArticle(1,'test','je suis en train d ecrire article');
	//$ar->afficherArticle();

?>