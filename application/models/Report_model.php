<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Report_model extends CI_model{


		# Get Accounts(s) Info Model
		public function getAccounts($reportType){
			$accountInfo = NULL;

			switch ($reportType) {
				case 'trialBalance':
					$getSQL = "SELECT * FROM accounts WHERE accountDebit > 0 OR accountCredit > 0 ORDER BY accountCategory";
					break;
				case 'balanceSheet':
					$getSQL = "SELECT * FROM accounts WHERE accountStatement = 'BS' AND (accountDebit > 0 OR accountCredit > 0) ORDER BY accountCategory";
					break;
					case 'incomeStatement':
						$getSQL = "SELECT * FROM accounts WHERE accountStatement = 'IS' AND (accountDebit > 0 OR accountCredit > 0) ORDER BY accountCategory DESC";
						break;
					case 'retainedEarnings':
						$getSQL = "SELECT * FROM accounts WHERE accountStatement = 'IS' AND (accountDebit > 0 OR accountCredit > 0) ORDER BY accountCategory DESC";
						break;
				default:
					$getSQL = "SELECT * FROM accounts";
					break;
			}
			$queryDB = $this->db->query($getSQL);
			$accountInfo = $queryDB->result();
			return $accountInfo;
		}


	}
