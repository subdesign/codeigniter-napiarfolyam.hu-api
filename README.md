# Napiarfolyam.hu CodeIgniter API

## Használat

```php

		$this->load->library('Napiarfolyam');
		$params = array(
			'bank'      => 'kh',
			'valutanem' => 'deviza'
		);
		if( ! $arfolyam = Napiarfolyam::arfolyam($params))
		{
			echo 'Hiba az árfolyam lekérdezésekor';
		}

```
* * *
## Paraméterek

Amennyiben nem adsz meg paramétert, úgy minden bank, minden aktuális árfolyama letöltődik

###Lekérdezés bank szerint
Lehetséges bankok: __bb, allianz, cib, citibank, commerz, erste, kdb, kh, mkb, oberbank, otp, raiffeisen, unicredit, volksbank, mnb, sopron, mfb, fhb__
```php

		$params = array(
			'bank'      => 'kh'
		);

```

###Lekérdezés valuta szerint
Lehetséges valuták: __GBP, AUD, DKK, JPY, CAD, NOK, CHF, SEK, USD, CZK, PLN, EUR, HRK, RON, TRY__

```php

		$params = array(
			'valuta'      => 'usd'
		);
```
* * *
##Opcionális paraméterek

###Adott dátum szerinti lekérdezés

```php

		$params = array(
			'bank'      => 'kh',
			'datum'		=> '20120601'
		);
```
###Dátum intervallum lekérdezés

```php

		$params = array(
			'bank'      => 'kh',
			'datum'		=> '20120601',
			'datumend'	=> '20120604'
		);
```
###Valutanem szerinti lekérdezés
Lehetésges értékek: __valuta, deviza__

```php

		$params = array(
			'bank'      => 'kh',
			'valutanem'	=> 'deviza'
		);
```
* * *
##Szükséges könyvtárak
[RESTclient](http://getsparks.org/packages/restclient)

[cURL](http://getsparks.org/packages/curl)
* * * 
##Megjegyzés
* Paraméternek megadható query string is (pl. bank=otp&datum=20120505 ).

* Érdemes cache használata, mivel a szolgáltató korlátozza az egy órán belül egy IP címről érkező kéréseket

* Az árfolyamokat a [napiarfolyam.hu](http://napiarfolyam.hu) szolgáltatja

* * *
##Licensz
A plugin MIT Lincesz alatt áll. [www.opensource.org/licenses/MIT](http://www.opensource.org/licenses/MIT)