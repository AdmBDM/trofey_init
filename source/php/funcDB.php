<?php

	function con2db() {
		try {
			return new PDO("pgsql:dbname=trofeyrt;host=rfprt.ru;port=5432", "dbusertrofeyrt", "trofeyRT");
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	////		$sqlQuery = $link->prepare('SELECT * FROM public.user');
	////		$sqlQuery->execute();
	////		$result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
