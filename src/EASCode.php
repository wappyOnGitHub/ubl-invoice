<?php

namespace NumNum\UBL;

/**
 * All possible ICD Identificiation Codes that can be used
 * To extend, see also:
 *     https://docs.peppol.eu/poacc/billing/3.0/codelist/eas/
 *     https://docs.peppol.eu/edelivery/codelists/v7.4/Peppol%20Code%20Lists%20-%20Participant%20identifier%20schemes%20v7.4.html
 */
class EASCode
{
    const SIRENE = "0002";
    const ORGANISATIONSNUMMER = "0007";
    const SIRET_CODE = "0009";
    const LY_TUNNUS = "0037";
    const DUNS_NUMBER = "0060";
    const EAN_LOCATION_CODE = "0088";
    const DANISH_CHAMBER_OF_COMMERCE_SCHEME_EDIRA = "0096";
    const FTI_EDIFORUM_ITALIA_EDIRA = "0097";
    const KVK_NETHERLANDS_EDIRA = "0106";
    const DIRECTORATES_OF_THE_EUROPEAN_COMMISSION = "0130";
    const SIA_OBJECT_IDENTIFIERS = "0135";
    const SECETI_OBJECT_IDENTIFIERS = "0142";
    const AUSTRALIAN_BUSINESS_NUMBER_SCHEME = "0151";
    const SWISS_UIDB = "0183";
    const DIGSTORG = "0184";
    const CORPORATE_NUMBER_OF_THE_SOCIAL_SECURITY_AND_TAX_NUMBER_SYSTEM = "0188";
    const DUTCH_ORIGINATOR_IDENTIFICATION_NUMBER = "0190";
    const CENTRE_OF_REGISTERS_AND_INFORMATION_SYSTEMS_OF_THE_MINISTRY_OF_JUSTICE = "0191";
    const ENHETSREGISTERET_VED_BRONNOYSUNDREGISTERNE = "0192";
    const UBL_BE_PARTY_IDENTIFIER = "0193";
    const SINGAPORE_UEN_IDENTIFIER = "0195";
    const ICELAND_LEGAL_ID_FOR_INDIVIDUALS_AND_LEGAL_ENTITIES = "0196";
    const ERSTORG = "0198";
    const LEGAL_ENTITY_IDENTIFIER_LEI = "0199";
    const LEGAL_ENTITY_CODE_LITHUANIA = "0200";
    const CODICE_UNIVOCO_UNITÀ_ORGANIZZATIVA_IPA = "0201";
    const INDIRIZZO_DI_POSTA_ELETTRONICA_CERTIFICATA = "0202";
    const LEITWEG_ID = "0204";
    const ENTERPRISE_NUMBER = "0208";
    const GS1_IDENTIFICATION_KEYS = "0209";
    const CODICE_FISCALE = "0210";
    const PARTITA_IVA = "0211";
    const FINNISH_ORGANIZATION_IDENTIFIER = "0212";
    const FINNISH_ORGANIZATION_VALUE_ADD_TAX_IDENTIFIER = "0213";
    const NET_SERVICE_ID = "0215";
    const OVTCODE = "0216";
    const REGISTERED_NUMBER_OF_THE_QUALIFIED_INVOICE_ISSUER_JAPAN = "0221";
    const NATIONAL_EINVOICING_FRAMEWORK_MALAYSIA = "0230";
    const DANISH_MINISTRY_OF_THE_INTERIOR_AND_HEALTH = "9901";
    /** @deprecated */
    const NORWEGIAN_VAT_NUMBER = "9909";
    const HUNGARY_VAT_NUMBER = "9910";
    /** @deprecated */
    const NATIONAL_MINISTRIES_OF_ECONOMY = "9912";
    const BUSINESS_REGISTERS_NETWORK = "9913";
    const ÖSTERREICHISCHE_UMSATZSTEUER_IDENTIFIKATIONSNUMMER = "9914";
    const ÖSTERREICHISCHES_VERWALTUNGS_BZW_ORGANISATIONSKENNZEICHEN = "9915";
    /** @deprecated */
    const FIRMENIDENTIFIKATIONSNUMMER_AUSTRIA = "9916";
    /** @deprecated */
    const ICELANDIC_NATIONAL_REGISTRY = "9917";
    const SOCIETY_FOR_WORLDWIDE_INTERBANK_FINANCIAL_TELECOMMUNICATION_SWIFT = "9918";
    const KENNZIFFER_DES_UNTERNEHMENSREGISTERS = "9919";
    const AGENCIA_ESPAÑOLA_DE_ADMINISTRACIÓN_TRIBUTARIA = "9920";
    /** @deprecated */
    const INDICE_DELLE_PUBBLICHE_AMMINISTRAZIONI_ITALIA = "9921";
    const ANDORRA_VATNUMBER = "9922";
    const ALBANIA_VATNUMBER = "9923";
    const BOSNIA_AND_HERZEGOVINA_VATNUMBER = "9924";
    const BELGIUM_VATNUMBER = "9925";
    const BULGARIA_VATNUMBER = "9926";
    const SWITZERLAND_VATNUMBER = "9927";
    const CYPRUS_VATNUMBER = "9928";
    const CZECH_REPUBLIC_VATNUMBER = "9929";
    const GERMANY_VATNUMBER = "9930";
    const ESTONIA_VATNUMBER = "9931";
    const UNITED_KINGDOM_VATNUMBER = "9932";
    const GREECE_VATNUMBER = "9933";
    const CROATIA_VATNUMBER = "9934";
    const IRELAND_VATNUMBER = "9935";
    const LIECHTENSTEIN_VATNUMBER = "9936";
    const LITHUANIA_VATNUMBER = "9937";
    const LUXEMBURG_VATNUMBER = "9938";
    const LATVIA_VATNUMBER = "9939";
    const MONACO_VATNUMBER = "9940";
    const MONTENEGRO_VATNUMBER = "9941";
    const MACEDONIA_VATNUMBER = "9942";
    const MALTA_VATNUMBER = "9943";
    const NETHERLANDS_VATNUMBER = "9944";
    const POLAND_VATNUMBER = "9945";
    const PORTUGAL_VATNUMBER = "9946";
    const ROMANIA_VATNUMBER = "9947";
    const SERBIA_VATNUMBER = "9948";
    const SLOVENIA_VATNUMBER = "9949";
    const SLOVAKIA_VATNUMBER = "9950";
    const SAN_MARINO_VATNUMBER = "9951";
    const TURKEY_VATNUMBER = "9952";
    const VATICAN_VATNUMBER = "9953";
    /** @deprecated */
    const DUTCH_ORIGINATORS_IDENTIFICATION_NUMBER = "9954";
    /** @deprecated */
    const BELGIAN_CROSSROAD_BANK_OF_ENTERPRISE_NUMBER = "9956";
    const FRANCE_VATNUMBER = "9957";
    /** @deprecated */
    const GERMAN_LEITWEG_ID = "9958";
    const EIN_USA_EMPLOYER_IDENTIFICATION_NUMBER = "9959";
}
