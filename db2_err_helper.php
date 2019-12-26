<?php
/*
 * Copyright (c) Rede 2019
 * Author      :   Rede 
 * Filename    :   db2_err_helper.php
 * Date        :   Des 26, 2019
 * Time        :   14:55:19 AM 
 */

class db2_err
{
    private function pesan_sqlcode($error)
    {
        switch ($error) {
            case '000':
                $keterangan = 'SUCCESSFUL';
                break;
            case '+012':
                $keterangan = 'THE UNQUALIFIED COLUMN NAME column-name WAS INTERPRETED AS A CORRELATED REFERENCE';
                break;
            case '+020':
                $keterangan = 'BIND, REBIND, OR PRECOMPILE OPTION option-name IS NOT SUPPORTED BY THE TARGET SERVER AND WILL BE IGNORED.';
                break;
            case '+098':
                $keterangan = 'A DYNAMIC SQL STATEMENT ENDS WITH A SEMICOLON.';
                break;
            case '+100':
                $keterangan = 'ROW NOT FOUND FOR FETCH, UPDATE OR DELETE, OR THE RESULT OF A QUERY IS AN EMPTY TABLE';
                break;
            case '+110':
                $keterangan = 'SQL UPDATE TO A DATA CAPTURE TABLE NOT SIGNALED TO ORIGINATING SUBSYSTEM';
                break;
            case '+111':
                $keterangan = 'THE SUBPAGES OPTION IS NOT SUPPORTED FOR TYPE 2 INDEXES';
                break;
            case '+117':
                $keterangan = 'THE NUMBER OF INSERT VALUES IS NOT THE SAME AS THE NUMBER OF OBJECT COLUMNS';
                break;
            case '+162':
                $keterangan = 'TABLESPACE database-name.tablespace-name HAS BEEN PLACED IN CHECK PENDING';
                break;
            case '+203':
                $keterangan = 'THE QUALIFIED COLUMN NAME column-name WAS RESOLVED USING A NON-UNIQUE OR UNEXPOSED NAME';
                break;
            case '+204':
                $keterangan = 'name IS AN UNDEFINED NAME';
                break;
            case '+205':
                $keterangan = 'column-name IS NOT A COLUMN OF TABLE table-name';
                break;
            case '+206':
                $keterangan = 'column-name IS NOT A COLUMN OF AN INSERTED TABLE, UPDATED TABLE, MERGED TABLE, OR ANY TABLE IDENTIFIED IN A FROM CLAUSE';
                break;
            case '+217':
                $keterangan = 'THE STATEMENT WAS NOT EXECUTED AS ONLY EXPLAIN INFORMATION REQUESTS ARE BEING PROCESSED.';
                break;
            case '+219':
                $keterangan = 'THE REQUIRED EXPLANATION TABLE table-name DOES NOT EXIST';
                break;
            case '+220':
                $keterangan = 'THE COLUMN column-name IN EXPLANATION TABLE table-name IS NOT DEFINED PROPERLY';
                break;
            case '+222':
                $keterangan = 'HOLE DETECTED USING CURSOR cursor-name';
                break;
            case '+231':
                $keterangan = 'CURRENT POSITION OF CURSOR cursor-name IS NOT VALID FOR THE SPECIFIED FETCH ORIENTATION OF THE CURRENT ROW OR ROWSET';
                break;
            case '+236':
                $keterangan = 'SQLDA INCLUDES integer1 SQLVAR ENTRIES, BUT integer2 ARE REQUIRED FOR integer3 COLUMNS';
                break;
            case '+237':
                $keterangan = 'SQLDA INCLUDES integer1 SQLVAR ENTRIES, BUT integer2 ARE REQUIRED BECAUSE AT LEAST ONE OF THE COLUMNS BEING DESCRIBED IS A DISTINCT TYPE';
                break;
            case '+238':
                $keterangan = 'SQLDA INCLUDES integer1 SQLVAR ENTRIES, BUT integer2 SQLVAR ENTRIES ARE NEEDED FOR integer3 COLUMNS BECAUSE AT LEAST ONE OF THE COLUMNS BEING DESCRIBED IS A LOB';
                break;
            case '+239':
                $keterangan = 'SQLDA INCLUDES integer1 SQLVAR ENTRIES, BUT integer2 ARE REQUIRED FOR integer3 COLUMNS BECAUSE AT LEAST ONE OF THE COLUMNS BEING DESCRIBED IS A DISTINCT TYPE';
                break;
            case '+252':
                $keterangan = 'A NON-ATOMIC statement STATEMENT SUCCESSFULLY PROCESSED ALL REQUESTED ROWS, WITH ONE OR MORE WARNING CONDITIONS';
                break;
            case '+304':
                $keterangan = ' A VALUE WITH DATA TYPE data-type1 CANNOT BE ASSIGNED TO A HOST VARIABLE BECAUSE THE VALUE IS NOT WITHIN THE RANGE OF THE HOST VARIABLE IN POSITION position-number WITH DATA TYPE data-type2';
                break;
            case '+331':
                $keterangan = ' THE NULL VALUE HAS BEEN ASSIGNED TO A HOST VARIABLE OR PARAMETER BECAUSE THE STRING CANNOT BE CONVERTED FROM source-ccsid TO target-ccsid. REASON reason-code, POSITION position-number';
                break;
            case '+335':
                $keterangan = 'DB2 CONVERTED A HOST VARIABLE, PARAMETER, OR COLUMN NUMBER var-num var-name-or-num TO COLUMN NAME, HOST VARIABLE, OR EXPRESSION NUMBER col-name-or-num FROM from ccsid TO to-ccsid, AND RESULTING IN SUBSTITUTION CHARACTERS.';
                break;
            case '+347':
                $keterangan = 'THE RECURSIVE COMMON TABLE EXPRESSION name MAY CONTAIN AN INFINITE LOOP';
                break;
            case '+354':
                $keterangan = 'A ROWSET FETCH STATEMENT MAY HAVE RETURNED ONE OR MORE ROWS OF DATA. HOWEVER, ONE OR MORE WARNING CONDITIONS WERE ALSO ENCOUNTERED. USE THE GET DIAGNOSTICS STATEMENT FOR MORE INFORMATION REGARDING THE CONDITIONS THAT WERE ENCOUNTERED';
                break;
            case '+361':
                $keterangan = ' COMMAND WAS SUCCESSFUL BUT RESULTED IN THE FOLLOWING: msg-token';
                break;
            case '+364':
                $keterangan = ' DECFLOAT EXCEPTION exception-type HAS OCCURRED DURING operation-type OPERATION, POSITION position-number';
                break;
            case '+385':
                $keterangan = 'ASSIGNMENT TO AN SQLSTATE OR SQLCODE VARIABLE IN AN SQL ROUTINE routine-name MAY BE OVERWRITTEN AND DOES NOT ACTIVATE ANY HANDLER';
                break;
            case '+394':
                $keterangan = ' ALL USER SPECIFIED OPTIMIZATION HINTS USED DURING ACCESS PATH SELECTION ';
                break;
            case '+395':
                $keterangan = ' A USER SPECIFIED OPTIMIZATION HINT IS INVALID (REASON CODE = reason-code) ';
                break;
            case '+402':
                $keterangan = ' LOCATION location IS UNKNOWN';
                break;
            case '+403':
                $keterangan = ' THE LOCAL OBJECT REFERENCED BY THE CREATE ALIAS STATEMENT DOES NOT EXIST';
                break;
            case '+434':
                $keterangan = ' clause IS A DEPRECATED CLAUSE';
                break;
            case '+438':
                $keterangan = ' APPLICATION RAISED WARNING WITH DIAGNOSTIC TEXT: text';
                break;
            case ' +440':
                $keterangan = ' NO routine-type BY THE NAME routine-name HAVING COMPATIBLE ARGUMENTS WAS FOUND';
                break;
            case '+445':
                $keterangan = ' VALUE value HAS BEEN TRUNCATED';
                break;
            case '+462':
                $keterangan = ' EXTERNAL FUNCTION OR PROCEDURE name (SPECIFIC NAME specific-name) HAS RETURNED A WARNING SQLSTATE, WITH DIAGNOSTIC TEXT text';
                break;
            case '+464':
                $keterangan = ' PROCEDURE proc RETURNED num QUERY RESULT SETS, WHICH EXCEEDS THE DEFINED LIMIT integer';
                break;
            case '+466':
                $keterangan = ' PROCEDURE proc RETURNED num QUERY RESULTS SETS';
                break;
            case '+494':
                $keterangan = ' NUMBER OF RESULT SETS IS GREATER THAN NUMBER OF LOCATORS';
                break;
            case '+495':
                $keterangan = ' ESTIMATED PROCESSOR COST OF estimate-amount1 PROCESSOR SECONDS (estimate-amount2 SERVICE UNITS) IN COST CATEGORY cost-category EXCEEDS A RESOURCE LIMIT WARNING THRESHOLD OF limit- amount SERVICE UNITS';
                break;
            case '+535':
                $keterangan = ' THE RESULT OF THE POSITIONED UPDATE OR DELETE MAY DEPEND ON THE ORDER OF THE ROWS';
                break;
            case '+541':
                $keterangan = ' THE REFERENTIAL OR UNIQUE CONSTRAINT name HAS BEEN IGNORED BECAUSE IT IS A DUPLICATE';
                break;
            case '+551':
                $keterangan = ' auth-id DOES NOT HAVE THE PRIVILEGE TO PERFORM OPERATION operation ON OBJECT object-name';
                break;
            case '+552':
                $keterangan = ' auth-id DOES NOT HAVE THE PRIVILEGE TO PERFORM OPERATION operation';
                break;
            case '+558':
                $keterangan = ' THE WITH GRANT OPTION IS IGNORED.';
                break;
            case '+562':
                $keterangan = ' A GRANT OF A PRIVILEGE WAS IGNORED BECAUSE THE GRANTEE ALREADY HAS THE PRIVILEGE FROM THE GRANTOR';
                break;
            case '+585':
                $keterangan = ' THE COLLECTION collection-id APPEARS MORE THAN ONCE WHEN SETTING THE special-register SPECIAL REGISTER';
                break;
            case '+599':
                $keterangan = ' COMPARISON FUNCTIONS ARE NOT CREATED FOR A DISTINCT TYPE BASED ON A LONG STRING DATA TYPE';
                break;
            case '+610':
                $keterangan = ' A CREATE/ALTER ON OBJECT object-name HAS PLACED OBJECT IN utility-name PENDING';
                break;
            case '+645':
                $keterangan = ' WHERE NOT NULL IS IGNORED BECAUSE THE INDEX KEY CANNOT CONTAIN NULL VALUES OR THE INDEX IS AN XML INDEX';
                break;
            case '+650':
                $keterangan = ' THE TABLE BEING CREATED OR ALTERED CANNOT BECOME A DEPENDENT TABLE';
                break;
            case '+653':
                $keterangan = ' TABLE table-name IN PARTITIONED TABLESPACE tspace-name IS NOT AVAILABLE BECAUSE ITS PARTITIONED INDEX HAS NOT BEEN CREATED';
                break;
            case '+655':
                $keterangan = ' STOGROUP stogroup_name HAS BOTH SPECIFIC AND NON-SPECIFIC VOLUME IDS. IT WILL NOT BE ALLOWED IN FUTURE RELEASES';
                break;
            case '+658':
                $keterangan = ' THE SUBPAGES VALUE IS IGNORED FOR THE CATALOG INDEX index-name';
                break;
            case '+664':
                $keterangan = ' THE INTERNAL LENGTH OF THE LIMIT-KEY FIELDS SPECIFIED IN THE PARTITION CLAUSE OF THE statement-name STATEMENT EXCEEDS THE EXISTING INTERNAL LIMIT KEY LENGTH STORED IN CATALOG TABLE table-name';
                break;
            case '+738':
                $keterangan = ' DEFINITION CHANGE OF object object_name MAY REQUIRE SIMILAR CHANGE ON READ-ONLY SYSTEMS';
                break;
            case '+799':
                $keterangan = ' THE SET STATEMENT set-stmt REFERENCES A SPECIAL REGISTER THAT DOES NOT EXIST AT THE SERVER SITE ';
                break;
            case '+802':
                $keterangan = ' EXCEPTION ERROR exception-type HAS OCCURRED DURING operation-type OPERATION ON data-type DATA, POSITION position-number';
                break;
            case '+806':
                $keterangan = ' BIND ISOLATION LEVEL RR CONFLICTS WITH TABLESPACE LOCKSIZE PAGE OR LOCKSIZE ROW AND LOCKMAX 0';
                break;
            case '+807':
                $keterangan = ' THE RESULT OF DECIMAL MULTIPLICATION MAY CAUSE OVERFLOW';
                break;
            case '+863':
                $keterangan = ' THE CONNECTION WAS SUCCESSFUL BUT ONLY SBCS WILL BE SUPPORTED';
                break;
            case '+883':
                $keterangan = ' ROLLBACK TO SAVEPOINT OCCURRED WHEN THERE WERE OPERATIONS THAT CANNOT BE UNDONE, OR AN OPERATION THAT CANNOT BE UNDONE OCCURRED WHEN THERE WAS A SAVEPOINT OUTSTANDING';
                break;
            case '+904':
                $keterangan = ' A RESOURCE IS UNAVAILABLE BUT PROCESSING CONTINUES. REASON reason-code, TYPE OF RESOURCE resource-type, AND RESOURCE NAME resource-name';
                break;
            case '+4726':
                $keterangan = ' THE STATEMENT WAS SUCCESSFULLY PREPARED, BUT IT CANNOT BE EXECUTED BECAUSE authorization-id DOES NOT HAVE privilege-name PRIVILEGE ON OBJECT object-name BUT HAS EXPLAIN PRIVILEGE';
                break;
            case '+4745':
                $keterangan = ' A SECTION WAS BOUND SUCCESSFULLY, BUT AN ERROR OCCURRED WHEN A STATEMENT IN A RELATED EXTENDED SECTION WAS BOUND. INFORMATION RETURNED: SECTION NUMBER section-number, SQLCODE sqlcode, SQLSTATE sqlstate, AND MESSAGE TOKENS token-list';
                break;
            case '+4748':
                $keterangan = ' THE statement STATEMENT FOR OBJECT object-name WAS SUCCESSFUL ON THE DB2 SERVER. THE OBJECT MAY NOT HAVE BEEN SUCCESSFULLY PROCESSED ON THE ACCELERATOR SERVER FOR REASON reason-code.';
                break;
            case '+4751':
                $keterangan = ' bind-type WARNING FOR PACKAGE  = package-name, THE USE OF keyword RESULTED IN UNSUCCESSFUL COMPLETION FOR ONE OR MORE STATEMENTS.';
                break;
            case '+4754':
                $keterangan = ' THE ACCELERATOR accelerator-name DOES NOT EXIST.';
                break;
            case '+20002':
                $keterangan = ' THE specification-source SPECIFICATION IS IGNORED FOR OBJECT object-name ';
                break;
            case '+20007':
                $keterangan = ' USE OF OPTIMIZATION HINTS IS DISALLOWED BY A DB2 SUBSYSTEM PARAMETER. THE SPECIAL REGISTER OPTIMIZATION HINT IS SET TO AN EMPTY STRING.';
                break;
            case '+20122':
                $keterangan = ' DEFINE NO OPTION IS NOT APPLICABLE IN THE CONTEXT SPECIFIED';
                break;
            case '+20141':
                $keterangan = ' TRUNCATION OF VALUE WITH LENGTH length OCCURRED FOR hv-or-parm-number';
                break;
            case '+20187':
                $keterangan = ' ROLLBACK TO SAVEPOINT CAUSED A NOT LOGGED TABLE SPACE TO BE PLACED IN THE LPL';
                break;
            case '+20224':
                $keterangan = ' ENCRYPTED DATA THAT WAS ORIGINALLY A BINARY STRING CANNOT BE DECRYPTED TO A CHARACTER STRING';
                break;
            case '20237':
                $keterangan = ' FETCH PRIOR ROWSET FOR CURSOR cursor-name RETURNED A PARTIAL ROWSET ';
                break;
            case '+20245':
                $keterangan = ' NOT PADDED CLAUSE IS IGNORED FOR INDEXES CREATED ON AUXILIARY TABLES';
                break;
            case '+20270':
                $keterangan = ' OPTION NOT SPECIFIED FOLLOWING ALTER PARTITION CLAUSE ';
                break;
            case '+20271':
                $keterangan = ' THE NAME AT ORDINAL POSITION position-number IN THE STATEMENT, WITH NAME object-name, WAS TRUNCATED. ';
                break;
            case '+20272':
                $keterangan = ' TABLE SPACE table-space-name HAS BEEN CONVERTED TO USE TABLE-CONTROLLED PARTITIONING INSTEAD OF INDEX-CONTROLLED PARTITIONING, ADDITIONAL INFORMATION: old-limit-key-value';
                break;
            case '+20278':
                $keterangan = 'THE VIEW view-name MAY NOT BE USED TO OPTIMIZE THE PROCESSING OF QUERIES';
                break;
            case '+20348':
                $keterangan = ' THE PATH VALUE HAS BEEN TRUNCATED.';
                break;
            case '+20360':
                $keterangan = ' TRUSTED CONNECTION CAN NOT BE ESTABLISHED FOR SYSTEM AUTHID authorization-name';
                break;
            case '+20365':
                $keterangan = ' A SIGNALING NAN WAS ENCOUNTERED, OR AN EXCEPTION OCCURRED IN AN ARITHMETIC OPERATION OR FUNCTION INVOLVING A DECFLOAT.';
                break;
            case '+20367':
                $keterangan = ' OPTION clause IS NOT SUPPORTED IN THE CONTEXT IN WHICH IT WAS SPECIFIED';
                break;
            case '+20368':
                $keterangan = ' TRUSTED CONTEXT context-name IS NO LONGER DEFINED TO BE USED BY SPECIFIC VALUES FOR ATTRIBUTE attribute-name.';
                break;
            case '+20371':
                $keterangan = ' THE ABILITY TO USE TRUSTED CONTEXT context-name WAS REMOVED FROM SOME, BUT NOT ALL AUTHORIZATION IDS SPECIFIED IN THE STATEMENT.';
                break;
            case '+20378':
                $keterangan = ' A NON-ATOMIC statement STATEMENT SUCCESSFULLY COMPLETED FOR SOME OF THE REQUESTED ROWS, POSSIBLY WITH WARNINGS, AND ONE OR MORE ERRORS, AND THE CURSOR CAN BE USED';
                break;
            case '+20458':
                $keterangan = ' THE PROCEDURE procedure-name HAS ENCOUNTERED AN INTERNAL PARAMETER PROCESSING ERROR IN PARAMETER number1. THE VALUE FOR PARAMETER number2 CONTAINS FURTHER INFORMATION ABOUT THE ERROR.';
                break;
            case '+20459':
                $keterangan = ' THE PROCEDURE procedure-name HAD ENCOUNTERED AN INTERNAL PROCESSING ERROR. THE VALUE FOR PARAMETER number CONTAINS FURTHER INFORMATION ABOUT THE ERROR.';
                break;
            case '+20460':
                $keterangan = ' THE PROCEDURE procedure-name SUPPORTS A HIGHER VERSION, version1. THAN THE SPECIFIED VERSION, version2, FOR PARAMETER number.';
                break;
            case '+20461':
                $keterangan = ' THE PROCEDURE procedure-name RETURNED OUTPUT IN THE ALTERNATE LOCALE, locale1, INSTEAD OF THE LOCALE locale2, SPECIFIED IN PARAMETER number.';
                break;
            case '+20468':
                $keterangan = ' THE COMBINATION OF TARGET NAMESPACE target-namespace AND SCHEMA LOCATION HINT location-hint IS NOT UNIQUE IN THE DB2 XML SCHEMA REPOSITORY.';
                break;
            case '+20520':
                $keterangan = ' ATTEMPT TO USE A DEPRECATED FEATURE msg-token. REASON CODE reason-code';
                break;
            case '+20543':
                $keterangan = ' A SYSTEM PARAMETER WAS OVERRIDDEN FOR object-name WHEN PROCESSING THE statement-name STATEMENT. REASON reason-code';
                break;
            case '+30100':
                $keterangan = 'OPERATION COMPLETED SUCCESSFULLY BUT A DISTRIBUTION PROTOCOL VIOLATION HAS BEEN DETECTED. ORIGINAL SQLCODE=original-sqlcode AND ORIGINAL SQLSTATE=original-sqlstate';
                break;
            case '-007':
                $keterangan = 'STATEMENT CONTAINS THE ILLEGAL CHARACTER invalid-character';
                break;
            case '-010':
                $keterangan = 'THE STRING CONSTANT BEGINNING string IS NOT TERMINATED';
                break;
            case '-011':
                $keterangan = 'COMMENT NOT CLOSED';
                break;
            case '-029':
                $keterangan = 'INTO CLAUSE REQUIRED';
                break;
            case '-051':
                $keterangan = 'identifier-name (sql-type) WAS PREVIOUSLY DECLARED OR REFERENCED';
                break;
            case '-056':
                $keterangan = 'AN SQLSTATE OR SQLCODE VARIABLE DECLARATION IS IN A NESTED COMPOUND STATEMENT';
                break;
            case '-057':
                $keterangan = 'THE RETURN STATEMENT IN AN SQL FUNCTION MUST RETURN A VALUE.';
                break;
            case '-058':
                $keterangan = 'VALUE SPECIFIED ON RETURN STATEMENT MUST BE AN INTEGER';
                break;
            case '-060':
                $keterangan = 'INVALID specification-type SPECIFICATION : specification-value';
                break;
            case '-078':
                $keterangan = 'PARAMETER NAMES MUST BE SPECIFIED FOR ROUTINE routine-name';
                break;
            case '-079':
                $keterangan = 'QUALIFIER FOR OBJECT name WAS SPECIFIED AS qualifier1 but qualifier2 IS REQUIRED';
                break;
            case '-084':
                $keterangan = 'UNACCEPTABLE SQL STATEMENT';
                break;
            case '-087':
                $keterangan = 'A NULL VALUE WAS SPECIFIED IN A CONTEXT WHERE A NULL IS NOT ALLOWED';
                break;
            case '-096':
                $keterangan = 'VARIABLE variable-name DOES NOT EXIST OR IS NOT SUPPORTED BY THE SERVER AND A DEFAULT VALUE WAS NOT PROVIDED';
                break;
            case '-097':
                $keterangan = 'THE USE OF LONG VARCHAR OR LONG VARGRAPHIC IS NOT ALLOWED IN THIS CONTEXT';
                break;
            case '-101':
                $keterangan = 'THE STATEMENT IS TOO LONG OR TOO COMPLEX';
                break;
            case '-102':
                $keterangan = 'STRING CONSTANT IS TOO LONG. STRING BEGINS string';
                break;
            case '-103':
                $keterangan = 'constant IS AN INVALID NUMERIC CONSTANT';
                break;
            case '-104':
                $keterangan = 'ILLEGAL SYMBOL "token". SOME SYMBOLS THAT MIGHT BE LEGAL ARE: token-list';
                break;
            case '-105':
                $keterangan = 'INVALID STRING';
                break;
            case '-107':
                $keterangan = 'THE NAME name-value IS TOO LONG. MAXIMUM ALLOWABLE SIZE IS maximum-size';
                break;
            case '-108':
                $keterangan = 'THE NAME name IS QUALIFIED INCORRECTLY';
                break;
            case '-109':
                $keterangan = 'clause-type CLAUSE IS NOT PERMITTED';
                break;
            case '-110':
                $keterangan = 'INVALID HEXADECIMAL CONSTANT BEGINNING constant';
                break;
            case '-111':
                $keterangan = 'AN AGGREGATE FUNCTION DOES NOT INCLUDE A COLUMN NAME';
                break;
            case '-112':
                $keterangan = 'THE OPERAND OF AN AGGREGATE FUNCTION INCLUDES AN AGGREGATE FUNCTION, AN OLAP SPECIFICATION, OR A SCALAR FULLSELECT';
                break;
            case '-113':
                $keterangan = 'INVALID CHARACTER FOUND IN: string, REASON CODE nnn';
                break;
            case '-114':
                $keterangan = 'THE LOCATION NAME location DOES NOT MATCH THE CURRENT SERVER';
                break;
            case '-115':
                $keterangan = 'A PREDICATE IS INVALID BECAUSE THE COMPARISON OPERATOR operator IS FOLLOWED BY A PARENTHESIZED LIST OR BY ANY OR ALL WITHOUT A SUBQUERY';
                break;
            case '-117':
                $keterangan = 'THE NUMBER OF VALUES ASSIGNED IS NOT THE SAME AS THE NUMBER OF SPECIFIED OR IMPLIED COLUMNS';
                break;
            case '-118':
                $keterangan = 'THE OBJECT TABLE OR VIEW OF THE DELETE OR UPDATE STATEMENT IS ALSO IDENTIFIED IN A FROM CLAUSE';
                break;
            case '-119':
                $keterangan = 'A COLUMN OR EXPRESSION IN A HAVING CLAUSE IS NOT VALID';
                break;
            case '-120':
                $keterangan = 'AN AGGREGATE FUNCTION OR OLAP SPECIFICATION IS NOT VALID IN THE CONTEXT IN WHICH IT WAS INVOKED';
                break;
            case '-121':
                $keterangan = 'THE TARGET name IS IDENTIFIED MORE THAN ONCE FOR ASSIGNMENT IN THE SAME SQL STATEMENT';
                break;
            case '-122':
                $keterangan = 'COLUMN OR EXPRESSION IN THE SELECT LIST IS NOT VALID';
                break;
            case '-123':
                $keterangan = 'THE PARAMETER IN POSITION n IN THE FUNCTION name MUST BE A CONSTANT OR KEYWORD';
                break;
            case '-125':
                $keterangan = 'AN INTEGER IN THE ORDER BY CLAUSE DOES NOT IDENTIFY A COLUMN OF THE RESULT';
                break;
            case '-126':
                $keterangan = 'THE SELECT STATEMENT CONTAINS BOTH AN UPDATE CLAUSE AND AN ORDER BY CLAUSE';
                break;
            case '-127':
                $keterangan = 'DISTINCT IS SPECIFIED MORE THAN ONCE IN A SUBSELECT';
                break;
            case '-128':
                $keterangan = 'INVALID USE OF NULL IN A PREDICATE';
                break;
            case '-129':
                $keterangan = 'THE STATEMENT CONTAINS TOO MANY TABLE NAMES';
                break;
            case '-130':
                $keterangan = 'THE ESCAPE CLAUSE CONSISTS OF MORE THAN ONE CHARACTER, OR THE STRING PATTERN CONTAINS AN INVALID OCCURRENCE OF THE ESCAPE CHARACTER';
                break;
            case '-131':
                $keterangan = 'STATEMENT WITH LIKE PREDICATE HAS INCOMPATIBLE DATA TYPES';
                break;
            case '-132':
                $keterangan = 'AN OPERAND OF value IS NOT VALID';
                break;
            case '-133':
                $keterangan = 'AN AGGREGATE FUNCTION IN A SUBQUERY OF A HAVING CLAUSE IS INVALID BECAUSE ALL COLUMN REFERENCES IN ITS ARGUMENT ARE NOT CORRELATED TO THE GROUP BY RESULT THAT THE HAVING CLAUSE IS APPLIED TO';
                break;
            case '-134':
                $keterangan = 'IMPROPER USE OF A STRING, LOB, XML, OR ARRAY VALUE';
                break;
            case '-136':
                $keterangan = 'SORT CANNOT BE EXECUTED BECAUSE THE SORT KEY LENGTH TOO LONG';
                break;
            case '-137':
                $keterangan = 'THE LENGTH RESULTING FROM operation IS GREATER THAN maximum-length';
                break;
            case '-138':
                $keterangan = 'THE SECOND OR THIRD ARGUMENT OF THE SUBSTR OR SUBSTRING FUNCTION IS OUT OF RANGE';
                break;
            case '-142':
                $keterangan = 'THE SQL STATEMENT IS NOT SUPPORTED';
                break;
            case '-144':
                $keterangan = 'INVALID SECTION NUMBER number';
                break;
            case '-147':
                $keterangan = 'ALTERS FUNCTION function-name FAILED BECAUSE SOURCE FUNCTIONS OR SPATIAL FUNCTIONS CANNOT BE ALTERED';
                break;
            case '-148':
                $keterangan = 'THE SOURCE TABLE OR TABLESPACE source-name CANNOT BE ALTERED, REASON reason-code';
                break;
            case '-150':
                $keterangan = 'THE OBJECT OF THE INSERT, DELETE, UPDATE, MERGE, OR TRUNCATE STATEMENT IS A VIEW, SYSTEM-MAINTAINED MATERIALIZED QUERY TABLE, OR TRANSITION TABLE FOR WHICH THE REQUESTED OPERATION IS NOT PERMITTED';
                break;
            case '-151':
                $keterangan = 'THE UPDATE OPERATION IS INVALID BECAUSE THE CATALOG DESCRIPTION OF COLUMN column-name INDICATES THAT IT CANNOT BE UPDATED';
                break;
            case '-152':
                $keterangan = 'THE DROP clause CLAUSE IN THE ALTER STATEMENT IS INVALID BECAUSE constraint-name IS A constraint-type';
                break;
            case '-153':
                $keterangan = 'THE STATEMENT IS INVALID BECAUSE THE VIEW OR TABLE DEFINITION DOES NOT INCLUDE A UNIQUE NAME FOR EACH COLUMN';
                break;
            case '-154':
                $keterangan = 'THE STATEMENT FAILED BECAUSE VIEW OR TABLE DEFINITION IS NOT VALID';
                break;
            case '-156':
                $keterangan = 'THE STATEMENT DOES NOT IDENTIFY A TABLE';
                break;
            case '-157':
                $keterangan = 'ONLY A TABLE NAME CAN BE SPECIFIED IN A FOREIGN KEY CLAUSE. object-name IS NOT THE NAME OF A TABLE.';
                break;
            case '-158':
                $keterangan = 'THE NUMBER OF COLUMNS OR ARGUMENTS SPECIFIED FOR name IS NOT THE SAME AS THE NUMBER OF COLUMNS IN THE RESULT TABLE.';
                break;
            case '-159':
                $keterangan = 'THE STATEMENT REFERENCES object-name WHICH IDENTIFIES AN actual-type RATHER THAN AN expected-type';
                break;
            case '-160':
                $keterangan = 'THE WITH CHECK OPTION CLAUSE IS NOT VALID FOR THE SPECIFIED VIEW';
                break;
            case '-161':
                $keterangan = 'THE INSERT OR UPDATE IS NOT ALLOWED BECAUSE A RESULTING ROW DOES NOT SATISFY THE VIEW DEFINITION';
                break;
            case '-164':
                $keterangan = 'authorization-id DOES NOT HAVE THE PRIVILEGE TO CREATE A VIEW WITH QUALIFICATION qualifier-name';
                break;
            case '-170':
                $keterangan = 'THE NUMBER OF ARGUMENTS SPECIFIED FOR function-name IS INVALID';
                break;
            case '-171':
                $keterangan = 'THE DATA TYPE, LENGTH, OR VALUE OF ARGUMENT argument-position OF function-name IS INVALID';
                break;
            case '-173':
                $keterangan = 'UR IS SPECIFIED ON THE WITH CLAUSE BUT THE CURSOR IS NOT READ-ONLY';
                break;
            case '-180':
                $keterangan = 'THE DATE, TIME, OR TIMESTAMP VALUE value IS INVALID';
                break;
            case '-181':
                $keterangan = 'THE STRING REPRESENTATION OF A DATETIME VALUE IS NOT A VALID DATETIME VALUE';
                break;
            case '-182':
                $keterangan = 'AN ARITHMETIC EXPRESSION WITH A DATETIME VALUE IS INVALID';
                break;
            case '-183':
                $keterangan = 'AN ARITHMETIC OPERATION ON A DATE OR TIMESTAMP HAS A RESULT THAT IS NOT WITHIN THE VALID RANGE OF DATES';
                break;
            case '-184':
                $keterangan = 'AN ARITHMETIC EXPRESSION WITH A DATETIME VALUE CONTAINS A PARAMETER MARKER';
                break;
            case '-185':
                $keterangan = 'THE LOCAL FORMAT OPTION HAS BEEN USED WITH A DATE OR TIME AND NO LOCAL EXIT HAS BEEN INSTALLED';
                break;
            case '-186':
                $keterangan = 'THE LOCAL DATE LENGTH OR LOCAL TIME LENGTH HAS BEEN INCREASED AND EXECUTING PROGRAM RELIES ON THE OLD LENGTH';
                break;
            case '-187':
                $keterangan = 'A REFERENCE TO A CURRENT DATETIME SPECIAL REGISTER IS INVALID BECAUSE THE MVS™ TOD CLOCK IS BAD OR THE MVS PARMTZ IS OUT OF RANGE';
                break;
            case '-188':
                $keterangan = 'THE STRING REPRESENTATION OF A NAME IS INVALID';
                break;
            case '-189':
                $keterangan = 'CCSID ccsid IS INVALID';
                break;
            case '-190':
                $keterangan = 'THE ATTRIBUTES SPECIFIED FOR THE COLUMN table-name.column-name ARE NOT COMPATIBLE WITH THE EXISTING COLUMN DEFINITION';
                break;
            case '-191':
                $keterangan = 'A STRING CANNOT BE USED BECAUSE IT IS INVALID MIXED DATA';
                break;
            case '-195':
                $keterangan = 'LAST COLUMN OF table-name CANNOT BE DROPPED';
                break;
            case '-196':
                $keterangan = 'COLUMN table-name.column-name CANNOT BE DROPPED. REASON = reason-code.';
                break;
            case '-197':
                $keterangan = 'A QUALIFIED COLUMN NAME IS NOT ALLOWED IN THE ORDER BY CLAUSE WHEN A SET OPERATOR IS ALSO SPECIFIED';
                break;
            case '-198':
                $keterangan = 'THE OPERAND OF THE PREPARE OR EXECUTE IMMEDIATE STATEMENT IS BLANK OR EMPTY';
                break;
            case '-199':
                $keterangan = 'ILLEGAL USE OF KEYWORD keyword. TOKEN token-list WAS EXPECTED';
                break;
            case '-203':
                $keterangan = 'A REFERENCE TO COLUMN column-name IS AMBIGUOUS';
                break;
            case '-204':
                $keterangan = 'name IS AN UNDEFINED NAME';
                break;
            case '-205':
                $keterangan = 'column-name IS NOT A COLUMN OF TABLE table-name';
                break;
            case '-206':
                $keterangan = 'object-name IS NOT VALID IN THE CONTEXT WHERE IT IS USED';
                break;
            case '-208':
                $keterangan = 'THE ORDER BY CLAUSE IS INVALID BECAUSE COLUMN column-name IS NOT PART OF THE RESULT TABLE';
                break;
            case '-212':
                $keterangan = 'name IS SPECIFIED MORE THAN ONCE IN THE REFERENCING CLAUSE OF A TRIGGER DEFINITION';
                break;
            case '-214':
                $keterangan = 'AN EXPRESSION IN THE FOLLOWING POSITION, OR STARTING WITH position-or-expression-start IN THE clause-type CLAUSE IS NOT VALID. REASON CODE = reason-code';
                break;
            case '-216':
                $keterangan = 'THE NUMBER OF ELEMENTS ON EACH SIDE OF A PREDICATE OPERATOR DOES NOT MATCH. PREDICATE OPERATOR IS operator.';
                break;
            case '-219':
                $keterangan = 'THE REQUIRED EXPLANATION TABLE table-name DOES NOT EXIST';
                break;
            case '-220':
                $keterangan = 'THE COLUMN column-name IN EXPLANATION TABLE table-name IS NOT DEFINED PROPERLY';
                break;
            case '-221':
                $keterangan = '"SET OF OPTIONAL COLUMNS" IN EXPLANATION TABLE table-name IS INCOMPLETE. OPTIONAL COLUMN column-name IS MISSING';
                break;
            case '-222':
                $keterangan = 'AN UPDATE OR DELETE OPERATION WAS ATTEMPTED AGAINST A HOLE USING CURSOR cursor-name';
                break;
            case '-224':
                $keterangan = 'THE RESULT TABLE DOES NOT AGREE WITH THE BASE TABLE USING cursor-name';
                break;
            case '-225':
                $keterangan = 'FETCH STATEMENT FOR cursor-name IS NOT VALID FOR THE DECLARATION OF THE CURSOR';
                break;
            case '-227':
                $keterangan = 'FETCH fetch-orientation IS NOT ALLOWED, BECAUSE CURSOR cursor-name HAS AN UNKNOWN POSITION (sqlcode,sqlstate)';
                break;
            case '-228':
                $keterangan = 'FOR UPDATE CLAUSE SPECIFIED FOR READ-ONLY CURSOR cursor-name';
                break;
            case '-229':
                $keterangan = 'THE LOCALE locale SPECIFIED IN A SET LC_CTYPE OR OTHER STATEMENT THAT IS LOCALE SENSITIVE WAS NOT FOUND';
                break;
            case '-240':
                $keterangan = 'THE PARTITION CLAUSE OF A LOCK TABLE STATEMENT IS INVALID';
                break;
            case '-242':
                $keterangan = 'THE OBJECT NAMED object-name OF TYPE object-type WAS SPECIFIED MORE THAN ONCE IN THE LIST OF OBJECTS, OR THE NAME IS THE SAME AS AN EXISTING OBJECT';
                break;
            case '-243':
                $keterangan = 'SENSITIVE CURSOR cursor-name CANNOT BE DEFINED FOR THE SPECIFIED SELECT STATEMENT';
                break;
            case '-244':
                $keterangan = 'SENSITIVITY sensitivity SPECIFIED ON THE FETCH IS NOT VALID FOR CURSOR cursor-name';
                break;
            case '-245':
                $keterangan = 'THE INVOCATION OF FUNCTION routine-name IS AMBIGUOUS';
                break;
            case '-246':
                $keterangan = 'STATEMENT USING CURSOR cursor-name SPECIFIED NUMBER OF ROWS num-rows WHICH IS NOT VALID WITH dimension';
                break;
            case '-247':
                $keterangan = 'A HOLE WAS DETECTED ON A MULTIPLE ROW FETCH STATEMENT USING CURSOR cursor-name, BUT INDICATOR VARIABLES WERE NOT PROVIDED TO DETECT THE CONDITION';
                break;
            case '-248':
                $keterangan = 'A POSITIONED DELETE OR UPDATE STATEMENT FOR CURSOR cursor-name SPECIFIED ROW n OF A ROWSET, BUT THE ROW IS NOT CONTAINED WITHIN THE CURRENT ROWSET';
                break;
            case '-249':
                $keterangan = 'DEFINITION OF ROWSET ACCESS FOR CURSOR cursor-name IS INCONSISTENT WITH THE FETCH ORIENTATION CLAUSE clause SPECIFIED';
                break;
            case '-250':
                $keterangan = 'THE LOCAL LOCATION NAME IS NOT DEFINED WHEN PROCESSING A THREE-PART OBJECT NAME';
                break;
            case '-251':
                $keterangan = 'TOKEN name IS NOT VALID';
                break;
            case '-253':
                $keterangan = 'A NON-ATOMIC statement STATEMENT SUCCESSFULLY COMPLETED FOR SOME OF THE REQUESTED ROWS, POSSIBLY WITH WARNINGS, AND ONE OR MORE ERRORS';
                break;
            case '-254':
                $keterangan = 'A NON-ATOMIC statement STATEMENT ATTEMPTED TO PROCESS MULTIPLE ROWS OF DATA, BUT ERRORS OCCURRED';
                break;
            case '-270':
                $keterangan = 'FUNCTION NOT SUPPORTED';
                break;
            case '-300':
                $keterangan = 'THE STRING CONTAINED IN HOST VARIABLE OR PARAMETER position-number IS NOT NUL-TERMINATED';
                break;
            case '-301':
                $keterangan = 'THE VALUE OF INPUT VARIABLE OR ARGUMENT NUMBER position-number CANNOT BE USED AS SPECIFIED BECAUSE OF ITS DATA TYPE';
                break;
            case '-302':
                $keterangan = 'THE VALUE OF INPUT VARIABLE OR PARAMETER NUMBER position-number IS INVALID OR TOO LARGE FOR THE TARGET COLUMN OR THE TARGET VALUE';
                break;
            case '-303':
                $keterangan = 'A VALUE CANNOT BE ASSIGNED TO VARIABLE NUMBER position-number BECAUSE THE DATA TYPES ARE NOT COMPATIBLE';
                break;
            case '-304':
                $keterangan = 'A VALUE WITH DATA TYPE data-type1 CANNOT BE ASSIGNED TO A HOST VARIABLE BECAUSE THE VALUE IS NOT WITHIN THE RANGE OF THE HOST VARIABLE IN POSITION position-number WITH DATA TYPE data-type2';
                break;
            case '-305':
                $keterangan = 'THE NULL VALUE CANNOT BE ASSIGNED TO OUTPUT HOST VARIABLE NUMBER position-number BECAUSE NO INDICATOR VARIABLE IS SPECIFIED';
                break;
            case '-309':
                $keterangan = 'A PREDICATE IS INVALID BECAUSE A REFERENCED HOST VARIABLE HAS THE NULL VALUE';
                break;
            case '-310':
                $keterangan = 'DECIMAL HOST VARIABLE OR PARAMETER number CONTAINS NON-DECIMAL DATA';
                break;
            case '-311':
                $keterangan = 'THE LENGTH OF INPUT HOST VARIABLE NUMBER position-number IS NEGATIVE OR GREATER THAN THE MAXIMUM';
                break;
            case '-312':
                $keterangan = 'VARIABLE variable-name IS NOT DEFINED OR NOT USABLE';
                break;
            case '-313':
                $keterangan = 'THE NUMBER OF HOST VARIABLES SPECIFIED IS NOT EQUAL TO THE NUMBER OF PARAMETER MARKERS';
                break;
            case '-314':
                $keterangan = 'THE STATEMENT CONTAINS AN AMBIGUOUS HOST VARIABLE REFERENCE';
                break;
            case '-327':
                $keterangan = 'THE ROW CANNOT BE INSERTED BECAUSE IT IS OUTSIDE THE BOUND OF THE PARTITION RANGE FOR THE LAST PARTITION';
                break;
            case '-330':
                $keterangan = 'A STRING CANNOT BE USED BECAUSE IT CANNOT BE PROCESSED. REASON reason-code, CHARACTER code-point, HOST VARIABLE position-number';
                break;
            case '-331':
                $keterangan = 'CHARACTER CONVERSION CANNOT BE PERFORMED BECAUSE A STRING, POSITION position-number, CANNOT BE CONVERTED FROM source-ccsid TO target-ccsid, REASON reason-code';
                break;
            case '-332':
                $keterangan = 'CHARACTER CONVERSION BETWEEN CCSID from-ccsid TO to-ccsid REQUESTED BY reason-code IS NOT SUPPORTED';
                break;
            case '-333':
                $keterangan = 'THE SUBTYPE OF A STRING VARIABLE IS NOT THE SAME AS THE SUBTYPE KNOWN AT BIND TIME AND THE DIFFERENCE CANNOT BE RESOLVED BY CHARACTER CONVERSION';
                break;
            case '-336':
                $keterangan = 'THE SCALE OF THE DECIMAL NUMBER MUST BE ZERO';
                break;
            case '-338':
                $keterangan = 'AN ON CLAUSE IS INVALID';
                break;
            case '-340':
                $keterangan = 'THE COMMON TABLE EXPRESSION name HAS THE SAME IDENTIFIER AS ANOTHER OCCURRENCE OF A COMMON TABLE EXPRESSION DEFINITION WITHIN THE SAME STATEMENT';
                break;
            case '-341':
                $keterangan = 'A CYCLIC REFERENCE EXISTS BETWEEN THE COMMON TABLE EXPRESSIONS name1 AND name2';
                break;
            case '-342':
                $keterangan = 'THE COMMON TABLE EXPRESSION name MUST NOT USE SELECT DISTINCT AND MUST USE UNION ALL BECAUSE IT IS RECURSIVE';
                break;
            case '-343':
                $keterangan = 'THE COLUMN NAMES ARE REQUIRED FOR THE RECURSIVE COMMON TABLE EXPRESSION name';
                break;
            case '-344':
                $keterangan = 'THE RECURSIVE COMMON TABLE EXPRESSION name HAS MISMATCHED DATA TYPES OR LENGTHS OR CODE PAGE FOR COLUMN column-name';
                break;
            case '-345':
                $keterangan = 'THE FULLSELECT OF THE RECURSIVE COMMON TABLE EXPRESSION name MUST BE A UNION ALL AND MUST NOT INCLUDE AGGREGATE FUNCTIONS, GROUP BY CLAUSE, HAVING CLAUSE, OR AN EXPLICIT JOIN INCLUDING AN ON CLAUSE';
                break;
            case '-346':
                $keterangan = 'AN INVALID REFERENCE TO COMMON TABLE EXPRESSION name OCCURS IN THE FIRST FULLSELECT, AS A SECOND OCCURRENCE IN THE SAME FROM CLAUSE, OR IN THE FROM CLAUSE OF A SUBQUERY';
                break;
            case '-348':
                $keterangan = 'sequence-expression CANNOT BE SPECIFIED IN THIS CONTEXT';
                break;
            case '-350':
                $keterangan = 'column-name WAS IMPLICITLY OR EXPLICITLY REFERENCED IN A CONTEXT IN WHICH IT CANNOT BE USED';
                break;
            case '-351':
                $keterangan = 'AN UNSUPPORTED SQLTYPE WAS ENCOUNTERED IN POSITION position-number OF THE SELECT-LIST';
                break;
            case '-352':
                $keterangan = 'AN UNSUPPORTED SQLTYPE WAS ENCOUNTERED IN POSITION position-number OF THE INPUT-LIST';
                break;
            case '-353':
                $keterangan = 'FETCH IS NOT ALLOWED, BECAUSE CURSOR cursor-name HAS AN UNKNOWN POSITION';
                break;
            case '-354':
                $keterangan = 'A ROWSET FETCH STATEMENT MAY HAVE RETURNED ONE OR MORE ROWS OF DATA. HOWEVER, ONE OR MORE NON-TERMINATING ERROR CONDITIONS WERE ENCOUNTERED. USE THE GET DIAGNOSTICS STATEMENT FOR MORE INFORMATION REGARDING THE CONDITIONS THAT WERE ENCOUNTERED';
                break;
            case '-355':
                $keterangan = 'A LOB COLUMN IS TOO LARGE TO BE LOGGED';
                break;
            case '-356':
                $keterangan = 'KEY EXPRESSION expression-number IS NOT VALID, REASON CODE = reason-code';
                break;
            case '-359':
                $keterangan = 'THE RANGE OF VALUES FOR THE IDENTITY COLUMN OR SEQUENCE IS EXHAUSTED';
                break;
            case '-363':
                $keterangan = 'THE EXTENDED INDICATOR VARIABLE VALUE FOR PARAMETER position-number IS OUT OF RANGE.';
                break;
            case '-365':
                $keterangan = 'USE OF THE VALUE OF EXTENDED INDICATOR VARIABLE IN POSITION value-position IS NOT VALID.';
                break;
            case '-372':
                $keterangan = 'ONLY ONE ROWID, IDENTITY, ROW CHANGE TIMESTAMP, ROW BEGIN, ROW END, TRANSACTION START ID, SECURITY LABEL, OR DATA CHANGE OPERATION COLUMN IS ALLOWED IN A TABLE';
                break;
            case '-373':
                $keterangan = 'DEFAULT CANNOT BE SPECIFIED FOR COLUMN OR SQL VARIABLE name';
                break;
            case '-374':
                $keterangan = 'THE CLAUSE clause HAS NOT BEEN SPECIFIED IN THE CREATE OR ALTER FUNCTION STATEMENT FOR LANGUAGE SQL FUNCTION function-name BUT AN EXAMINATION OF THE FUNCTION BODY REVEALS THAT IT SHOULD BE SPECIFIED';
                break;
            case '-390':
                $keterangan = 'OBJECT object-name, SPECIFIC NAME specific-name, IS NOT VALID IN THE CONTEXT WHERE IT IS USED';
                break;
            case '-392':
                $keterangan = 'SQLDA PROVIDED FOR CURSOR cursor-name HAS BEEN CHANGED FROM THE PREVIOUS FETCH (reason-code)';
                break;
            case '-393':
                $keterangan = 'THE CONDITION OR CONNECTION NUMBER IS INVALID';
                break;
            case '-396':
                $keterangan = 'object-type object-name ATTEMPTED TO EXECUTE AN SQL STATEMENT DURING FINAL CALL PROCESSING';
                break;
            case '-397':
                $keterangan = 'GENERATED IS SPECIFIED AS PART OF A COLUMN DEFINITION, BUT IT IS NOT VALID FOR THE DEFINITION OF THE COLUMN';
                break;
            case '-398':
                $keterangan = 'A LOCATOR WAS REQUESTED FOR HOST VARIABLE NUMBER position-number BUT THE VARIABLE IS NOT A LOB';
                break;
            case '-399':
                $keterangan = 'INVALID VALUE ROWID WAS SPECIFIED';
                break;
            case '-400':
                $keterangan = 'THE CATALOG HAS THE MAXIMUM NUMBER OF USER DEFINED INDEXES';
                break;
            case '-401':
                $keterangan = 'THE DATA TYPES OF THE OPERANDS OF AN OPERATION ARE NOT COMPATIBLE';
                break;
            case '-402':
                $keterangan = 'AN ARITHMETIC FUNCTION OR OPERATOR function-operator IS APPLIED TO CHARACTER OR DATETIME DATA';
                break;
            case '-404':
                $keterangan = 'THE SQL STATEMENT SPECIFIES A STRING THAT IS TOO LONG';
                break;
            case '-405':
                $keterangan = 'THE NUMERIC CONSTANT constant CANNOT BE USED AS SPECIFIED BECAUSE IT IS OUT OF RANGE';
                break;
            case '-406':
                $keterangan = 'A CALCULATED OR DERIVED NUMERIC VALUE IS NOT WITHIN THE RANGE OF ITS OBJECT COLUMN';
                break;
            case '-407':
                $keterangan = 'AN UPDATE, INSERT, OR SET VALUE IS NULL, BUT THE OBJECT COLUMN column-name CANNOT CONTAIN NULL VALUES';
                break;
            case '-408':
                $keterangan = 'THE VALUE IS NOT COMPATIBLE WITH THE DATA TYPE OF ITS TARGET. TARGET NAME IS name';
                break;
            case '-409':
                $keterangan = 'INVALID OPERAND OF A COUNT FUNCTION';
                break;
            case '-410':
                $keterangan = 'A NUMERIC VALUE value IS TOO LONG, OR IT HAS A VALUE THAT IS NOT WITHIN THE RANGE OF ITS DATA TYPE';
                break;
            case '-412':
                $keterangan = 'THE SELECT CLAUSE OF A SUBQUERY SPECIFIES MULTIPLE COLUMNS';
                break;
            case '-413':
                $keterangan = 'OVERFLOW OR UNDERFLOW OCCURRED DURING NUMERIC DATA TYPE CONVERSION';
                break;
            case '-414':
                $keterangan = 'A LIKE PREDICATE IS INVALID BECAUSE THE FIRST OPERAND IS NOT A STRING';
                break;
            case '-415':
                $keterangan = 'THE CORRESPONDING COLUMNS, column-number, OF THE OPERANDS OF A SET OPERATOR ARE NOT COMPATIBLE';
                break;
            case '-416':
                $keterangan = 'AN OPERAND OF A SET OPERATOR CONTAINS A LONG STRING COLUMN';
                break;
            case '-417':
                $keterangan = 'A STATEMENT STRING TO BE PREPARED INCLUDES PARAMETER MARKERS AS THE OPERANDS OF THE SAME OPERATOR';
                break;
            case '-418':
                $keterangan = 'A STATEMENT STRING TO BE PREPARED CONTAINS AN INVALID USE OF PARAMETER MARKERS';
                break;
            case '-419':
                $keterangan = 'THE DECIMAL DIVIDE OPERATION IS INVALID BECAUSE THE RESULT WOULD HAVE A NEGATIVE SCALE';
                break;
            case '-420':
                $keterangan = 'THE VALUE OF A STRING ARGUMENT WAS NOT ACCEPTABLE TO THE function-name FUNCTION';
                break;
            case '-421':
                $keterangan = 'THE OPERANDS OF A SET OPERATOR DO NOT HAVE THE SAME NUMBER OF COLUMNS';
                break;
            case '-423':
                $keterangan = 'INVALID VALUE FOR LOCATOR IN POSITION position-#';
                break;
            case '-426':
                $keterangan = 'DYNAMIC COMMIT NOT VALID AT AN APPLICATION SERVER WHERE UPDATES ARE NOT ALLOWED';
                break;
            case '-427':
                $keterangan = 'DYNAMIC ROLLBACK NOT VALID AT AN APPLICATION SERVER WHERE UPDATES ARE NOT ALLOWED';
                break;
            case '-430':
                $keterangan = 'routine-type routine-name (SPECIFIC NAME specific-name) HAS ABNORMALLY TERMINATED';
                break;
            case '-431':
                $keterangan = 'ROUTINE routine-name (SPECIFIC NAME specific-name) OF TYPE routine-type HAS BEEN INTERRUPTED BY THE USER';
                break;
            case '-433':
                $keterangan = 'VALUE value IS TOO LONG';
                break;
            case '-435':
                $keterangan = 'AN INVALID SQLSTATE sqlstate IS SPECIFIED IN A RAISE_ERROR FUNCTION, RESIGNAL STATEMENT, OR SIGNAL STATEMENT';
                break;
            case '-438':
                $keterangan = 'APPLICATION RAISED ERROR WITH DIAGNOSTIC TEXT: text';
                break;
            case '-440':
                $keterangan = 'NO AUTHORIZED routine-type BY THE NAME routine-name HAVING COMPATIBLE ARGUMENTS WAS FOUND';
                break;
            case '-441':
                $keterangan = 'INVALID USE OF DISTINCT OR ALL WITH FUNCTION function-name';
                break;
            case '-443':
                $keterangan = 'ROUTINE routine-name (SPECIFIC NAME specific-name) HAS RETURNED AN ERROR SQLSTATE WITH DIAGNOSTIC TEXT msg-text';
                break;
            case '-444':
                $keterangan = 'USER PROGRAM name COULD NOT BE FOUND';
                break;
            case '-449':
                $keterangan = 'CREATE OR ALTER STATEMENT FOR FUNCTION OR PROCEDURE routine-name CONTAINS AN INVALID FORMAT OF THE EXTERNAL NAME CLAUSE OR IS MISSING THE EXTERNAL NAME CLAUSE';
                break;
            case '-450':
                $keterangan = 'USER-DEFINED FUNCTION OR STORED PROCEDURE name, PARAMETER NUMBER parmnum, OVERLAYED STORAGE BEYOND ITS DECLARED LENGTH.';
                break;
            case '-451':
                $keterangan = 'THE data-item DEFINITION IN THE CREATE OR ALTER STATEMENT FOR routine-name CONTAINS DATA TYPE type WHICH IS NOT SUPPORTED FOR THE TYPE AND LANGUAGE OF THE ROUTINE';
                break;
            case '-452':
                $keterangan = 'UNABLE TO ACCESS THE FILE REFERENCED BY HOST VARIABLE variable-position. REASON CODE: reason-code';
                break;
            case '-453':
                $keterangan = 'THERE IS A PROBLEM WITH THE RETURNS CLAUSE IN THE CREATE FUNCTION STATEMENT FOR function-name';
                break;
            case '-454':
                $keterangan = 'THE SIGNATURE PROVIDED IN THE CREATE FUNCTION STATEMENT FOR function-name MATCHES THE SIGNATURE OF SOME OTHER FUNCTION ALREADY EXISTING IN THE SCHEMA';
                break;
            case '-455':
                $keterangan = 'IN CREATE FUNCTION FOR function-name, THE SCHEMA NAME schema-name1 PROVIDED FOR THE SPECIFIC NAME DOES NOT MATCH THE SCHEMA NAME schema-name2 OF THE FUNCTION';
                break;
            case '-456':
                $keterangan = 'IN CREATE FUNCTION FOR function-name, THE SPECIFIC NAME specific-name ALREADY EXISTS IN THE SCHEMA';
                break;
            case '-457':
                $keterangan = 'A USER-DEFINED FUNCTION OR USER-DEFINED TYPE CANNOT BE CALLED name SINCE IT IS RESERVED FOR SYSTEM USE';
                break;
            case '-458':
                $keterangan = 'IN A REFERENCE TO FUNCTION function-name BY SIGNATURE, A MATCHING FUNCTION COULD NOT BE FOUND';
                break;
            case '-461':
                $keterangan = 'A VALUE WITH DATA TYPE source-data-type CANNOT BE CAST TO TYPE target-data-type';
                break;
            case '-469':
                $keterangan = 'SQL CALL STATEMENT MUST SPECIFY AN OUTPUT VARIABLE FOR PARAMETER number';
                break;
            case '-470':
                $keterangan = 'SQL CALL STATEMENT SPECIFIED A NULL VALUE FOR INPUT PARAMETER number, BUT THE STORED PROCEDURE DOES NOT SUPPORT NULL VALUES.';
                break;
            case '-471':
                $keterangan = 'INVOCATION OF FUNCTION OR PROCEDURE name FAILED DUE TO REASON rc';
                break;
            case '-472':
                $keterangan = 'CURSOR cursor-name WAS LEFT OPEN BY EXTERNAL FUNCTION function-name (SPECIFIC NAME specific-name)';
                break;
            case '-473':
                $keterangan = 'A USER DEFINED DATA TYPE CANNOT BE CALLED THE SAME NAME AS A SYSTEM PREDEFINED TYPE (BUILT-IN TYPE)';
                break;
            case '-475':
                $keterangan = 'THE RESULT TYPE type-1 OF THE SOURCE FUNCTION CANNOT BE CAST TO THE RETURNS TYPE type-2 OF THE USER-DEFINED FUNCTION function-name';
                break;
            case '-476':
                $keterangan = 'REFERENCE TO FUNCTION function-name WAS NAMED WITHOUT A SIGNATURE, BUT THE FUNCTION IS NOT UNIQUE WITHIN ITS SCHEMA';
                break;
            case '-478':
                $keterangan = 'ALTER, DROP, OR REVOKE AFFECTING OBJECT TYPE object-type CANNOT BE PROCESSED BECAUSE OBJECT dependent-object OF TYPE dependent-type IS DEPENDENT ON IT';
                break;
            case '-480':
                $keterangan = 'THE PROCEDURE procedure-name HAS NOT YET BEEN CALLED';
                break;
            case '-481':
                $keterangan = 'THE GROUP BY CLAUSE CONTAINS element-1 NESTED WITHIN element-2';
                break;
            case '-482':
                $keterangan = 'THE PROCEDURE procedure-name RETURNED NO LOCATORS';
                break;
            case '-483':
                $keterangan = 'IN CREATE FUNCTION FOR function-name STATEMENT, THE NUMBER OF PARAMETERS DOES NOT MATCH THE NUMBER OF PARAMETERS OF THE SOURCE FUNCTION';
                break;
            case '-487':
                $keterangan = 'object-type object-name ATTEMPTED TO EXECUTE AN SQL STATEMENT WHEN THE DEFINITION OF THE FUNCTION OR PROCEDURE DID NOT SPECIFY THIS ACTION';
                break;
            case '-490':
                $keterangan = 'NUMBER number DIRECTLY SPECIFIED IN AN SQL STATEMENT IS OUTSIDE THE RANGE OF ALLOWABLE VALUES IN THIS CONTEXT (minval, maxval)';
                break;
            case '-491':
                $keterangan = 'CREATE STATEMENT FOR USER-DEFINED FUNCTION function-name MUST HAVE A RETURNS CLAUSE AND: THE EXTERNAL CLAUSE WITH OTHER REQUIRED KEYWORDS; THE PARAMETER NAMES; OR THE SOURCE CLAUSE';
                break;
            case '-492':
                $keterangan = 'THE CREATE FUNCTION FOR function-name HAS A PROBLEM WITH PARAMETER NUMBER number. IT MAY INVOLVE A MISMATCH WITH A SOURCE FUNCTION';
                break;
            case '-495':
                $keterangan = 'ESTIMATED PROCESSOR COST OF estimate-amount1 PROCESSOR SECONDS (estimate-amount2 SERVICE UNITS) IN COST CATEGORY cost-category EXCEEDS A RESOURCE LIMIT ERROR THRESHOLD OF limit- amount SERVICE UNITS';
                break;
            case '-496':
                $keterangan = 'THE SQL STATEMENT CANNOT BE EXECUTED BECAUSE IT REFERENCES A RESULT SET THAT WAS NOT CREATED BY THE CURRENT SERVER';
                break;
            case '-497':
                $keterangan = 'THE MAXIMUM LIMIT OF INTERNAL IDENTIFIERS HAS BEEN EXCEEDED FOR DATABASE database-name';
                break;
            case '-499':
                $keterangan = 'CURSOR cursor-name HAS ALREADY BEEN ASSIGNED TO THIS OR ANOTHER RESULT SET FROM PROCEDURE procedure-name.';
                break;
            case '-500':
                $keterangan = 'THE IDENTIFIED CURSOR WAS CLOSED WHEN THE CONNECTION WAS DESTROYED';
                break;
            case '-501':
                $keterangan = 'THE CURSOR IDENTIFIED IN A FETCH OR CLOSE STATEMENT IS NOT OPEN';
                break;
            case '-502':
                $keterangan = 'THE CURSOR IDENTIFIED IN AN OPEN STATEMENT IS ALREADY OPEN';
                break;
            case '-503':
                $keterangan = 'A COLUMN CANNOT BE UPDATED BECAUSE IT IS NOT IDENTIFIED IN THE UPDATE CLAUSE OF THE SELECT STATEMENT OF THE CURSOR';
                break;
            case '-504':
                $keterangan = 'CURSOR NAME cursor-name IS NOT DECLARED';
                break;
            case '-507':
                $keterangan = 'THE CURSOR IDENTIFIED IN THE UPDATE OR DELETE STATEMENT IS NOT OPEN';
                break;
            case '-508':
                $keterangan = 'THE CURSOR IDENTIFIED IN THE UPDATE OR DELETE STATEMENT IS NOT POSITIONED ON A ROW OR ROWSET THAT CAN BE UPDATED OR DELETED';
                break;
            case '-509':
                $keterangan = 'THE TABLE IDENTIFIED IN THE UPDATE OR DELETE STATEMENT IS NOT THE SAME TABLE DESIGNATED BY THE CURSOR';
                break;
            case '-510':
                $keterangan = 'THE TABLE DESIGNATED BY THE CURSOR OF THE UPDATE OR DELETE STATEMENT CANNOT BE MODIFIED';
                break;
            case '-511':
                $keterangan = 'THE FOR UPDATE CLAUSE CANNOT BE SPECIFIED BECAUSE THE RESULT TABLE DESIGNATED BY THE SELECT STATEMENT CANNOT BE MODIFIED';
                break;
            case '-512':
                $keterangan = 'STATEMENT REFERENCE TO REMOTE OBJECT IS INVALID';
                break;
            case '-513':
                $keterangan = ' INVALID USE OF alias-name ';
                break;
            case '-514':
                $keterangan = 'THE CURSOR cursor-name IS NOT IN A PREPARED STATE';
                break;
            case '-516':
                $keterangan = 'THE DESCRIBE STATEMENT DOES NOT SPECIFY A PREPARED STATEMENT';
                break;
            case '-517':
                $keterangan = 'CURSOR cursor-name CANNOT BE USED BECAUSE ITS STATEMENT NAME DOES NOT IDENTIFY A PREPARED SELECT STATEMENT';
                break;
            case '-518':
                $keterangan = 'THE EXECUTE STATEMENT DOES NOT IDENTIFY A VALID PREPARED STATEMENT';
                break;
            case '-519':
                $keterangan = 'THE PREPARE STATEMENT IDENTIFIES THE SELECT STATEMENT OF THE OPENED CURSOR cursor-name';
                break;
            case '-525':
                $keterangan = 'THE SQL STATEMENT CANNOT BE EXECUTED BECAUSE IT WAS IN ERROR AT BIND TIME FOR SECTION = sectno PACKAGE = pkgname CONSISTENCY TOKEN = contoken';
                break;
            case '-526':
                $keterangan = 'THE REQUESTED OPERATION OR USAGE DOES NOT APPLY TO table-type TEMPORARY TABLE table-name';
                break;
            case '-530':
                $keterangan = 'THE INSERT OR UPDATE VALUE OF FOREIGN KEY constraint-name IS INVALID';
                break;
            case '-531':
                $keterangan = 'PARENT KEY IN A PARENT ROW CANNOT BE UPDATED BECAUSE IT HAS ONE OR MORE DEPENDENT ROWS IN RELATIONSHIP constraint-name';
                break;
            case '-532':
                $keterangan = 'THE RELATIONSHIP constraint-name RESTRICTS THE DELETION OF ROW WITH RID X rid-number';
                break;
            case '-533':
                $keterangan = 'INVALID MULTIPLE-ROW INSERT';
                break;
            case '-534':
                $keterangan = 'THE PRIMARY KEY CANNOT BE UPDATED BECAUSE OF MULTIPLE-ROW UPDATE';
                break;
            case '-536':
                $keterangan = 'THE DELETE STATEMENT IS INVALID BECAUSE TABLE table-name CAN BE AFFECTED BY THE OPERATION';
                break;
            case '-537':
                $keterangan = 'THE PRIMARY KEY, FOREIGN KEY, UNIQUE, OR PARTITIONING KEY CLAUSE IDENTIFIES COLUMN column-name MORE THAN ONCE';
                break;
            case '-538':
                $keterangan = 'FOREIGN KEY name DOES NOT CONFORM TO THE DESCRIPTION OF A PARENT KEY OF TABLE table-name';
                break;
            case '-539':
                $keterangan = 'TABLE table-name DOES NOT HAVE A PRIMARY KEY';
                break;
            case '-540':
                $keterangan = 'THE DEFINITION OF TABLE table-name IS INCOMPLETE BECAUSE IT LACKS A PRIMARY INDEX OR A REQUIRED UNIQUE INDEX';
                break;
            case '-542':
                $keterangan = 'column-name CANNOT BE A COLUMN OF A HASH KEY, PRIMARY KEY, A UNIQUE CONSTRAINT, OR A PARENT KEY BECAUSE IT CAN CONTAIN NULL VALUES';
                break;
            case '-543':
                $keterangan = 'A ROW IN A PARENT TABLE CANNOT BE DELETED BECAUSE THE CHECK CONSTRAINT check-constraint RESTRICTS THE DELETION';
                break;
            case '-544':
                $keterangan = 'THE CHECK CONSTRAINT SPECIFIED IN THE ALTER TABLE STATEMENT CANNOT BE ADDED BECAUSE AN EXISTING ROW VIOLATES THE CHECK CONSTRAINT';
                break;
            case '-545':
                $keterangan = 'THE REQUESTED OPERATION IS NOT ALLOWED BECAUSE A ROW DOES NOT SATISFY THE CHECK CONSTRAINT check-constraint';
                break;
            case '-546':
                $keterangan = 'THE CHECK CONSTRAINT constraint-name IS INVALID';
                break;
            case '-548':
                $keterangan = 'A CHECK CONSTRAINT THAT IS DEFINED WITH column-name IS INVALID';
                break;
            case '-549':
                $keterangan = 'THE statement STATEMENT IS NOT ALLOWED FOR object_type1 object_name BECAUSE THE BIND OPTION DYNAMICRULES(RUN) IS NOT IN EFFECT FOR object_type2';
                break;
            case '-551':
                $keterangan = 'auth-id DOES NOT HAVE THE PRIVILEGE TO PERFORM OPERATION operation ON OBJECT object-name';
                break;
            case '-552':
                $keterangan = 'authorization-id DOES NOT HAVE THE PRIVILEGE TO PERFORM OPERATION operation';
                break;
            case '-553':
                $keterangan = 'AUTHORIZATION ID OR SCHEMA NAME name SPECIFIED IS NOT VALID FOR REQUESTED OPERATION';
                break;
            case '-554':
                $keterangan = 'AN AUTHORIZATION ID OR ROLE CANNOT GRANT A PRIVILEGE TO ITSELF';
                break;
            case '-555':
                $keterangan = 'AN AUTHORIZATION ID OR ROLE CANNOT REVOKE A PRIVILEGE FROM ITSELF';
                break;
            case '-556':
                $keterangan = 'revoke-target CANNOT HAVE THE privilege PRIVILEGE object-name REVOKED BY revoker-id BECAUSE THE REVOKEE DOES NOT POSSESS THE PRIVILEGE OR THE REVOKER DID NOT MAKE THE GRANT';
                break;
            case '-557':
                $keterangan = 'INCONSISTENT GRANT/REVOKE KEYWORD keyword. PERMITTED KEYWORDS ARE keyword-list';
                break;
            case '-559':
                $keterangan = 'ALL AUTHORIZATION FUNCTIONS HAVE BEEN DISABLED';
                break;
            case '-562':
                $keterangan = 'THE SPECIFIED PRIVILEGES CANNOT BE GRANTED TO PUBLIC.';
                break;
            case '-567':
                $keterangan = 'bind-type AUTHORIZATION ERROR USING auth-id AUTHORITY PACKAGE = package-name PRIVILEGE = privilege';
                break;
            case '-571':
                $keterangan = 'THE STATEMENT WOULD RESULT IN A MULTIPLE SITE UPDATE';
                break;
            case '-573':
                $keterangan = 'TABLE table-name DOES NOT HAVE A UNIQUE KEY WITH THE SPECIFIED COLUMN NAMES';
                break;
            case '-574':
                $keterangan = 'THE SPECIFIED DEFAULT VALUE OR IDENTITY ATTRIBUTE VALUE CONFLICTS WITH THE DEFINITION OF COLUMN column-name';
                break;
            case '-575':
                $keterangan = 'OBJECT object-name (OBJECT TYPE object-type) CANNOT BE REFERENCED EXPLICITLY OR IMPLICITLY';
                break;
            case '-577':
                $keterangan = 'object-type object-name ATTEMPTED TO MODIFY DATA WHEN THE DEFINITION OF THE FUNCTION OR PROCEDURE DID NOT SPECIFY THIS ACTION';
                break;
            case '-578':
                $keterangan = 'THE RETURN STATEMENT WAS NOT EXECUTED FOR SQL FUNCTION function-name.';
                break;
            case '-579':
                $keterangan = 'object-type object-name ATTEMPTED TO READ DATA WHEN THE DEFINITION OF THE FUNCTION OR PROCEDURE DID NOT SPECIFY THIS ACTION';
                break;
            case '-580':
                $keterangan = 'THE RESULT-EXPRESSIONS OF A CASE EXPRESSION CANNOT ALL BE NULL';
                break;
            case '-581':
                $keterangan = 'THE DATA TYPES OF THE RESULT-EXPRESSIONS OF A CASE EXPRESSION ARE NOT COMPATIBLE';
                break;
            case '-582':
                $keterangan = 'THE SEARCH-CONDITION IN A SEARCHED-WHEN-CLAUSE OF A CASE IS NOT VALID IN THE CONTEXT IN WHICH IT WAS SPECIFIED. THE SEARCH CONDITION CONTAINS A QUANTIFIED PREDICATE OR AN IN PREDICATE THAT INCLUDES A FULLSELECT, AND THESE ARE NOT ALLOWED IN THE SPECIFIED CONTEXT.';
                break;
            case '-583':
                $keterangan = 'THE USE OF FUNCTION OR EXPRESSION name IS INVALID BECAUSE IT IS NOT DETERMINISTIC OR HAS AN EXTERNAL ACTION';
                break;
            case '-584':
                $keterangan = 'INVALID USE OF NULL OR DEFAULT';
                break;
            case '-585':
                $keterangan = 'THE COLLECTION collection-id APPEARS MORE THAN ONCE IN THE SET special-register STATEMENT';
                break;
            case '-586':
                $keterangan = 'THE TOTAL LENGTH OF THE CURRENT PATH SPECIAL REGISTER CANNOT EXCEED 2048 CHARACTERS';
                break;
            case '-589':
                $keterangan = 'A POSITIONED DELETE OR UPDATE STATEMENT FOR CURSOR cursor-name SPECIFIED A ROW OF A ROWSET, BUT THE CURSOR IS NOT POSITIONED ON A ROWSET';
                break;
            case '-590':
                $keterangan = 'NAME name IS NOT UNIQUE IN THE CREATE OR ALTER FOR ROUTINE routine-name';
                break;
            case '-592':
                $keterangan = 'NOT AUTHORIZED TO CREATE FUNCTIONS OR PROCEDURES IN WLM ENVIRONMENT env-name';
                break;
            case '-593':
                $keterangan = 'NOT NULL MUST BE SPECIFIED FOR column-name BECAUSE IT IS DEFINED AS A ROWID (OR DISTINCT TYPE FOR ROWID), ROW CHANGE TIMESTAMP COLUMN, ROW BEGIN COLUMN, ROW END COLUMN, OR COLUMN OF A PERIOD column-name';
                break;
            case '-594':
                $keterangan = 'ATTEMPT TO CREATE A NULLABLE ROWID OR DISTINCT TYPE COLUMN column-name';
                break;
            case '-601':
                $keterangan = 'THE NAME (VERSION OR VOLUME SERIAL NUMBER) OF THE OBJECT TO BE DEFINED OR THE TARGET OF A RENAME STATEMENT IS IDENTICAL TO THE EXISTING NAME (VERSION OR VOLUME SERIAL NUMBER) object-name OF THE OBJECT TYPE object-type';
                break;
            case '-602':
                $keterangan = 'TOO MANY COLUMNS, PERIODS, OR KEY-EXPRESSIONS SPECIFIED IN A CREATE INDEX OR ALTER INDEX STATEMENT';
                break;
            case '-603':
                $keterangan = 'A UNIQUE INDEX CANNOT BE CREATED BECAUSE THE TABLE CONTAINS ROWS WHICH ARE DUPLICATES WITH RESPECT TO THE VALUES OF THE IDENTIFIED COLUMNS AND PERIODS';
                break;
            case '-604':
                $keterangan = 'A DATA TYPE DEFINITION SPECIFIES AN INVALID ATTRIBUTE SUCH AS LENGTH, PRECISION, OR SCALE ATTRIBUTE';
                break;
            case '-607':
                $keterangan = 'OPERATION OR OPTION operation IS NOT DEFINED FOR THIS OBJECT';
                break;
            case '-611':
                $keterangan = 'ONLY LOCKMAX 0 CAN BE SPECIFIED WHEN THE LOCK SIZE OF THE TABLESPACE IS TABLESPACE OR TABLE';
                break;
            case '-612':
                $keterangan = 'identifier IS A DUPLICATE NAME';
                break;
            case '-613':
                $keterangan = 'THE PRIMARY KEY OR A HASH KEY OR A UNIQUE CONSTRAINT IS TOO LONG OR HAS TOO MANY COLUMNS AND PERIODS';
                break;
            case '-614':
                $keterangan = 'THE INDEX CANNOT BE CREATED OR ALTERED, OR THE LENGTH OF A COLUMN CANNOT BE CHANGED BECAUSE THE SUM OF THE INTERNAL LENGTHS OF THE COLUMNS FOR THE INDEX IS GREATER THAN THE ALLOWABLE MAXIMUM';
                break;
            case '-615':
                $keterangan = 'operation-type IS NOT ALLOWED ON A PACKAGE IN USE';
                break;
            case '-616':
                $keterangan = 'obj-type1 obj-name1 CANNOT BE DROPPED BECAUSE IT IS REFERENCED BY obj-type2 obj-name2';
                break;
            case '-618':
                $keterangan = 'OPERATION operation IS NOT ALLOWED ON SYSTEM DATABASES';
                break;
            case '-619':
                $keterangan = 'OPERATION DISALLOWED BECAUSE THE DATABASE IS NOT STOPPED';
                break;
            case '-620':
                $keterangan = 'KEYWORD keyword IN stmt-type STATEMENT IS NOT PERMITTED FOR A space-type SPACE IN THE database-type DATABASE';
                break;
            case '-621':
                $keterangan = 'DUPLICATE DBID dbid WAS DETECTED AND PREVIOUSLY ASSIGNED TO database-name';
                break;
            case '-622':
                $keterangan = 'FOR MIXED DATA IS INVALID BECAUSE THE MIXED DATA INSTALL OPTION IS NO';
                break;
            case '-623':
                $keterangan = 'CLUSTER IS NOT VALID FOR table-name';
                break;
            case '-624':
                $keterangan = 'TABLE table-name ALREADY HAS A PRIMARY KEY OR UNIQUE CONSTRAINT WITH SPECIFIED COLUMNS AND PERIODS';
                break;
            case '-625':
                $keterangan = 'TABLE table-name DOES NOT HAVE AN INDEX TO ENFORCE THE UNIQUENESS OF THE PRIMARY OR UNIQUE KEY';
                break;
            case '-626':
                $keterangan = 'THE ALTER STATEMENT IS NOT EXECUTABLE BECAUSE THE PAGE SET IS NOT STOPPED';
                break;
            case '-627':
                $keterangan = 'THE ALTER STATEMENT IS INVALID BECAUSE THE TABLE SPACE OR INDEX HAS USER-MANAGED DATA SETS';
                break;
            case '-628':
                $keterangan = 'THE CLAUSES ARE MUTUALLY EXCLUSIVE';
                break;
            case '-629':
                $keterangan = 'SET NULL CANNOT BE SPECIFIED BECAUSE FOREIGN KEY name CANNOT CONTAIN NULL VALUES';
                break;
            case '-631':
                $keterangan = 'FOREIGN KEY name IS TOO LONG OR HAS TOO MANY COLUMNS';
                break;
            case '-632':
                $keterangan = 'THE TABLE CANNOT BE DEFINED AS A DEPENDENT OF table-name BECAUSE OF DELETE RULE RESTRICTIONS';
                break;
            case '-633':
                $keterangan = 'THE DELETE RULE MUST BE delete-rule';
                break;
            case '-634':
                $keterangan = 'THE DELETE RULE MUST NOT BE CASCADE';
                break;
            case '-635':
                $keterangan = 'THE DELETE RULES CANNOT BE DIFFERENT OR CANNOT BE SET NULL';
                break;
            case '-636':
                $keterangan = 'RANGES SPECIFIED FOR PARTITION part-num ARE NOT VALID';
                break;
            case '-637':
                $keterangan = 'DUPLICATE keyword-name KEYWORD OR CLAUSE';
                break;
            case '-638':
                $keterangan = 'TABLE table-name CANNOT BE CREATED BECAUSE COLUMN DEFINITION IS MISSING';
                break;
            case '-639':
                $keterangan = 'A NULLABLE COLUMN OF A FOREIGN KEY WITH A DELETE RULE OF SET NULL CANNOT BE A COLUMN OF THE KEY OF A PARTITIONED INDEX';
                break;
            case '-640':
                $keterangan = 'LOCKSIZE ROW CANNOT BE SPECIFIED BECAUSE TABLE IN THIS TABLESPACE HAS TYPE 1 INDEX';
                break;
            case '-643':
                $keterangan = 'A CHECK CONSTRAINT OR THE VALUE OF AN EXPRESSION FOR A COLUMN OF AN INDEX EXCEEDS THE MAXIMUM ALLOWABLE LENGTH KEY EXPRESSION';
                break;
            case '-644':
                $keterangan = 'INVALID VALUE SPECIFIED FOR KEYWORD OR CLAUSE keyword-or-clause IN STATEMENT statement-type';
                break;
            case '-646':
                $keterangan = 'TABLE table-name CANNOT BE CREATED IN SPECIFIED TABLE SPACE table-space-name BECAUSE IT ALREADY CONTAINS A TABLE';
                break;
            case '-647':
                $keterangan = 'BUFFERPOOL bp-name FOR IMPLICIT OR EXPLICIT TABLESPACE OR INDEXSPACE name HAS NOT BEEN ACTIVATED';
                break;
            case '-650':
                $keterangan = 'THE ALTER STATEMENT CANNOT BE EXECUTED, REASON reason-code';
                break;
            case '-651':
                $keterangan = 'TABLE DESCRIPTION EXCEEDS MAXIMUM SIZE OF OBJECT DESCRIPTOR.';
                break;
            case '-652':
                $keterangan = 'VIOLATION OF INSTALLATION DEFINED EDIT OR VALIDATION PROCEDURE proc-name';
                break;
            case '-653':
                $keterangan = 'TABLE table-name IN PARTITIONED TABLE SPACE tspace-name IS NOT AVAILABLE BECAUSE ITS PARTITIONED INDEX HAS NOT BEEN CREATED';
                break;
            case '-655':
                $keterangan = 'THE CREATE OR ALTER STOGROUP IS INVALID BECAUSE THE STORAGE GROUP WOULD HAVE BOTH SPECIFIC AND NON-SPECIFIC VOLUME IDS';
                break;
            case '-658':
                $keterangan = 'A object-type CANNOT BE DROPPED USING THE statement STATEMENT';
                break;
            case '-660':
                $keterangan = 'INDEX index-name CANNOT BE CREATED OR ALTERED ON PARTITIONED TABLE SPACE tspace-name BECAUSE KEY LIMITS ARE NOT SPECIFIED';
                break;
            case '-661':
                $keterangan = 'object-type object-name CANNOT BE CREATED ON PARTITIONED TABLE SPACE tspace-name BECAUSE THE NUMBER OF PARTITION SPECIFICATIONS IS NOT EQUAL TO THE NUMBER OF PARTITIONS OF THE TABLE SPACE';
                break;
            case '-662':
                $keterangan = 'A PARTITIONED INDEX CANNOT BE CREATED ON A TABLE SPACE, OR A TABLE SPACE CANNOT BE INDEX-CONTROLLED. TABLE SPACE tspace-name, REASON reason-code';
                break;
            case '-663':
                $keterangan = 'THE NUMBER OF KEY LIMIT VALUES IS EITHER ZERO, OR GREATER THAN THE NUMBER OF COLUMNS IN THE KEY OF INDEX index-name';
                break;
            case '-665':
                $keterangan = 'THE PARTITION CLAUSE OF AN ALTER STATEMENT IS OMITTED OR INVALID';
                break;
            case '-666':
                $keterangan = 'stmt-verb object CANNOT BE EXECUTED BECAUSE function IS IN PROGRESS';
                break;
            case '-667':
                $keterangan = 'THE CLUSTERING INDEX FOR A PARTITIONED TABLE SPACE CANNOT BE EXPLICITLY DROPPED';
                break;
            case '-668':
                $keterangan = 'THE COLUMN CANNOT BE ADDED TO THE TABLE BECAUSE THE TABLE HAS AN EDIT PROCEDURE DEFINED WITH ROW ATTRIBUTE SENSITIVITY';
                break;
            case '-669':
                $keterangan = 'THE OBJECT CANNOT BE EXPLICITLY DROPPED. REASON reason-code';
                break;
            case '-670':
                $keterangan = 'THE RECORD LENGTH OF THE TABLE EXCEEDS THE PAGE SIZE LIMIT';
                break;
            case '-671':
                $keterangan = 'THE BUFFERPOOL ATTRIBUTE OF THE TABLE SPACE CANNOT BE ALTERED AS SPECIFIED BECAUSE IT WOULD CHANGE THE PAGE SIZE OF THE TABLE SPACE';
                break;
            case '-672':
                $keterangan = 'OPERATION DROP NOT ALLOWED ON TABLE table_name';
                break;
            case '-676':
                $keterangan = 'THE PHYSICAL CHARACTERISTICS OF THE INDEX ARE INCOMPATIBLE WITH RESPECT TO THE SPECIFIED STATEMENT. THE STATEMENT HAS FAILED. REASON reason-code';
                break;
            case '-677':
                $keterangan = 'INSUFFICIENT VIRTUAL STORAGE FOR BUFFERPOOL EXPANSION';
                break;
            case '-678':
                $keterangan = 'THE CONSTANT constant SPECIFIED FOR THE INDEX LIMIT KEY MUST CONFORM TO THE DATA TYPE data-type OF THE CORRESPONDING COLUMN column-name';
                break;
            case '-679':
                $keterangan = 'THE OBJECT name CANNOT BE CREATED BECAUSE A DROP IS PENDING ON THE OBJECT';
                break;
            case '-680':
                $keterangan = 'TOO MANY COLUMNS SPECIFIED FOR A TABLE, VIEW OR TABLE FUNCTION';
                break;
            case '-681':
                $keterangan = 'COLUMN column-name IN VIOLATION OF INSTALLATION DEFINED FIELD PROCEDURE. RT: return-code, RS: reason-code, MSG: message-token';
                break;
            case '-682':
                $keterangan = 'FIELD PROCEDURE procedure-name COULD NOT BE LOADED';
                break;
            case '-683':
                $keterangan = 'THE SPECIFICATION FOR COLUMN, DISTINCT TYPE, FUNCTION, OR PROCEDURE data-item CONTAINS INCOMPATIBLE CLAUSES';
                break;
            case '-684':
                $keterangan = 'THE LENGTH OF CONSTANT LIST BEGINNING string IS TOO LONG';
                break;
            case '-685':
                $keterangan = 'INVALID FIELD TYPE, column-name';
                break;
            case '-686':
                $keterangan = 'COLUMN DEFINED WITH A FIELD PROCEDURE CAN NOT COMPARE WITH ANOTHER COLUMN WITH DIFFERENT FIELD PROCEDURE';
                break;
            case '-687':
                $keterangan = 'FIELD TYPES INCOMPARABLE';
                break;
            case '-688':
                $keterangan = 'INCORRECT DATA RETURNED FROM FIELD PROCEDURE, column-name, msgno';
                break;
            case '-689':
                $keterangan = 'TOO MANY COLUMNS DEFINED FOR A DEPENDENT TABLE';
                break;
            case '-690':
                $keterangan = 'THE STATEMENT IS REJECTED BY DATA DEFINITION CONTROL SUPPORT. REASON reason-code';
                break;
            case '-691':
                $keterangan = 'THE REQUIRED REGISTRATION TABLE table-name DOES NOT EXIST';
                break;
            case '-692':
                $keterangan = 'THE REQUIRED UNIQUE INDEX index-name FOR DDL REGISTRATION TABLE table-name DOES NOT EXIST';
                break;
            case '-693':
                $keterangan = 'THE COLUMN column-name IN DDL REGISTRATION TABLE OR INDEX name IS NOT DEFINED PROPERLY';
                break;
            case '-694':
                $keterangan = 'THE SCHEMA STATEMENT CANNOT BE EXECUTED BECAUSE A DROP IS PENDING ON THE DDL REGISTRATION TABLE table-name';
                break;
            case '-695':
                $keterangan = 'INVALID VALUE seclabel SPECIFIED FOR SECURITY LABEL COLUMN OF TABLE table-name';
                break;
            case '-696':
                $keterangan = 'THE DEFINITION OF TRIGGER trigger-name INCLUDES AN INVALID USE OF CORRELATION NAME OR TRANSITION TABLE NAME name. REASON CODE=reason-code';
                break;
            case '-697':
                $keterangan = 'OLD OR NEW CORRELATION NAMES ARE NOT ALLOWED IN A TRIGGER DEFINED WITH THE FOR EACH STATEMENT CLAUSE. OLD_TABLE OR NEW_TABLE NAMES ARE NOT ALLOWED IN A TRIGGER WITH THE BEFORE CLAUSE.';
                break;
            case '-713':
                $keterangan = 'THE REPLACEMENT VALUE FOR special-register IS INVALID';
                break;
            case '-715':
                $keterangan = 'PROGRAM program-name WITH MARK release-dependency-mark FAILED BECAUSE IT DEPENDS ON FUNCTIONS OF THE RELEASE FROM WHICH FALLBACK HAS OCCURRED';
                break;
            case '-716':
                $keterangan = 'PROGRAM program-name PRECOMPILED WITH INCORRECT LEVEL FOR THIS RELEASE';
                break;
            case '-717':
                $keterangan = 'bind-type FOR object-type object-name WITH MARK release-dependency-mark FAILED BECAUSE object-type DEPENDS ON FUNCTIONS OF THE RELEASE FROM WHICH FALLBACK HAS OCCURRED';
                break;
            case '-718':
                $keterangan = 'REBIND OF PACKAGE package-name FAILED BECAUSE IBMREQD OF ibmreqd IS INVALID';
                break;
            case '-719':
                $keterangan = 'BIND ADD ERROR USING auth-id AUTHORITY PACKAGE package-name ALREADY EXISTS';
                break;
            case '-720':
                $keterangan = 'BIND ERROR, ATTEMPTING TO REPLACE PACKAGE = package_name WITH version= version2 BUT THIS VERSION ALREADY EXISTS';
                break;
            case '-721':
                $keterangan = 'BIND ERROR FOR PACKAGE = pkg-id CONTOKEN = contoken X IS NOT UNIQUE SO IT CANNOT BE CREATED';
                break;
            case '-722':
                $keterangan = 'bind-type ERROR USING auth-id AUTHORITY PACKAGE package-name DOES NOT EXIST';
                break;
            case '-723':
                $keterangan = 'AN ERROR OCCURRED IN A TRIGGERED SQL STATEMENT IN trigger-name. INFORMATION RETURNED: SQLCODE: sql-code, SQLSTATE: sql-state, MESSAGE TOKENS token-list, SECTION NUMBER section-number';
                break;
            case '-724':
                $keterangan = 'THE ACTIVATION OF THE object-type OBJECT object-name WOULD EXCEED THE MAXIMUM LEVEL OF INDIRECT SQL CASCADING';
                break;
            case '-725':
                $keterangan = 'THE SPECIAL REGISTER register AT LOCATION location WAS SUPPLIED AN INVALID VALUE';
                break;
            case '-726':
                $keterangan = 'BIND ERROR ATTEMPTING TO REPLACE PACKAGE = package-name. THERE ARE ENABLE OR DISABLE ENTRIES CURRENTLY ASSOCIATED WITH THE PACKAGE';
                break;
            case '-729':
                $keterangan = 'A STORED PROCEDURE SPECIFYING COMMIT ON RETURN CANNOT BE THE TARGET OF A NESTED CALL STATEMENT';
                break;
            case '-730':
                $keterangan = 'THE PARENT OF A TABLE IN A READ-ONLY SHARED DATABASE MUST ALSO BE A TABLE IN A READ-ONLY SHARED DATABASE';
                break;
            case '-731':
                $keterangan = 'USER-DEFINED DATASET dsname MUST BE DEFINED WITH SHAREOPTIONS(1,3)';
                break;
            case '-732':
                $keterangan = 'THE DATABASE IS DEFINED ON THIS SUBSYSTEM WITH THE ROSHARE READ ATTRIBUTE BUT THE TABLE SPACE OR INDEX SPACE HAS NOT BEEN DEFINED ON THE OWNING SUBSYSTEM';
                break;
            case '-733':
                $keterangan = 'THE DESCRIPTION OF A TABLE SPACE, INDEX SPACE, OR TABLE IN A ROSHARE READ DATABASE MUST BE CONSISTENT WITH ITS DESCRIPTION IN THE OWNER SYSTEM';
                break;
            case '-734':
                $keterangan = 'THE ROSHARE ATTRIBUTE OF A DATABASE CANNOT BE ALTERED FROM ROSHARE READ';
                break;
            case '-735':
                $keterangan = 'DATABASE dbid CANNOT BE ACCESSED BECAUSE IT IS NO LONGER A SHARED DATABASE';
                break;
            case '-736':
                $keterangan = 'INVALID OBID obid SPECIFIED';
                break;
            case '-737':
                $keterangan = 'IMPLICIT TABLE SPACE NOT ALLOWED';
                break;
            case '-739':
                $keterangan = 'CREATE OR ALTER FUNCTION function-name FAILED BECAUSE FUNCTIONS CANNOT MODIFY DATA WHEN THEY ARE PROCESSED IN PARALLEL.';
                break;
            case '-740':
                $keterangan = 'FUNCTION name IS DEFINED WITH THE OPTION MODIFIES SQL DATA WHICH IS NOT VALID IN THE CONTEXT IN WHICH IT WAS INVOKED';
                break;
            case '-741':
                $keterangan = 'A database-type DATABASE IS ALREADY DEFINED FOR MEMBER member-name';
                break;
            case '-742':
                $keterangan = 'DSNDB07 IS THE IMPLICIT WORK FILE DATABASE';
                break;
            case '-746':
                $keterangan = 'THE SQL STATEMENT IN FUNCTION, TRIGGER, OR IN STORED PROCEDURE name VIOLATES THE NESTING SQL RESTRICTION';
                break;
            case '-747':
                $keterangan = 'TABLE table-name IS NOT AVAILABLE UNTIL THE AUXILIARY TABLES AND INDEXES FOR ITS EXTERNALLY STORED COLUMNS HAVE BEEN CREATED';
                break;
            case '-748':
                $keterangan = 'AN INDEX index-name ALREADY EXISTS ON AUXILIARY TABLE table-name';
                break;
            case '-750':
                $keterangan = 'THE SOURCE TABLE source-name CANNOT BE RENAMED OR ALTERED AS SPECIFIED';
                break;
            case '-751':
                $keterangan = 'object-type object-name (SPECIFIC NAME specific name) ATTEMPTED TO EXECUTE AN SQL STATEMENT sql-statement THAT IS NOT ALLOWED';
                break;
            case '-752':
                $keterangan = 'THE CONNECT STATEMENT IS INVALID BECAUSE THE PROCESS IS NOT IN THE CONNECTABLE STATE';
                break;
            case '-763':
                $keterangan = 'INVALID TABLE SPACE NAME space-name';
                break;
            case '-764':
                $keterangan = 'A LOB TABLE SPACE AND ITS ASSOCIATED BASE TABLE SPACE MUST BE IN THE SAME DATABASE';
                break;
            case '-765':
                $keterangan = 'TABLE IS NOT COMPATIBLE WITH DATABASE';
                break;
            case '-766':
                $keterangan = 'THE OBJECT OF A STATEMENT IS A TABLE FOR WHICH THE REQUESTED OPERATION IS NOT PERMITTED';
                break;
            case '-767':
                $keterangan = 'MISSING OR INVALID COLUMN SPECIFICATION FOR INDEX index-name';
                break;
            case '-768':
                $keterangan = 'AN AUXILIARY TABLE ALREADY EXISTS FOR THE SPECIFIED COLUMN OR PARTITION';
                break;
            case '-769':
                $keterangan = 'SPECIFICATION OF CREATE AUX TABLE DOES NOT MATCH THE CHARACTERISTICS OF THE BASE TABLE';
                break;
            case '-770':
                $keterangan = 'TABLE table-name CANNOT HAVE A LOB COLUMN UNLESS IT ALSO HAS A ROWID, OR AN XML COLUMN UNLESS IT ALSO HAS A DOCID COLUMN';
                break;
            case '-771':
                $keterangan = 'INVALID SPECIFICATION OF A ROWID COLUMN';
                break;
            case '-773':
                $keterangan = 'CASE NOT FOUND FOR CASE STATEMENT';
                break;
            case '-776':
                $keterangan = 'USE OF CURSOR cursor-name IS NOT VALID';
                break;
            case '-778':
                $keterangan = 'ENDING LABEL label-name DOES NOT MATCH THE BEGINNING LABEL';
                break;
            case '-779':
                $keterangan = 'LABEL label SPECIFIED ON A GOTO, ITERATE, OR LEAVE STATEMENT IS NOT VALID';
                break;
            case '-780':
                $keterangan = 'UNDO SPECIFIED FOR A HANDLER';
                break;
            case '-781':
                $keterangan = 'CONDITION condition-name IS NOT DEFINED OR THE DEFINITION IS NOT IN SCOPE';
                break;
            case '-782':
                $keterangan = 'A CONDITION OR SQLSTATE condition-value SPECIFIED IS NOT VALID';
                break;
            case '-783':
                $keterangan = 'SELECT LIST FOR CURSOR cursor-name IN FOR STATEMENT IS NOT VALID. COLUMN column-name IS NOT UNIQUE';
                break;
            case '-784':
                $keterangan = 'CONSTRAINT constraint-name CANNOT BE DROPPED.';
                break;
            case '-785':
                $keterangan = 'USE OF SQLCODE OR SQLSTATE IS NOT VALID';
                break;
            case '-787':
                $keterangan = 'RESIGNAL STATEMENT ISSUED OUTSIDE OF A HANDLER';
                break;
            case '-789':
                $keterangan = 'THE DATA TYPE OR OTHER ATTRIBUTES FOR PARAMETER OR SQL VARIABLE name ARE NOT SUPPORTED IN THE ROUTINE';
                break;
            case '-797':
                $keterangan = 'THE TRIGGER trigger-name IS DEFINED WITH AN UNSUPPORTED TRIGGERED SQL STATEMENT';
                break;
            case '-798':
                $keterangan = 'A VALUE CANNOT BE SPECIFIED FOR COLUMN column-name WHICH IS DEFINED AS GENERATED ALWAYS';
                break;
            case '-802':
                $keterangan = 'EXCEPTION ERROR exception-type HAS OCCURRED DURING operation-type OPERATION ON data-type DATA, POSITION position-number';
                break;
            case '-803':
                $keterangan = 'AN INSERTED OR UPDATED VALUE IS INVALID BECAUSE THE INDEX IN INDEX SPACE indexspace-name CONSTRAINS COLUMNS OF THE TABLE SO NO TWO ROWS CAN CONTAIN DUPLICATE VALUES IN THOSE COLUMNS. RID OF EXISTING ROW IS X record-id';
                break;
            case '-804':
                $keterangan = 'AN ERROR WAS FOUND IN THE APPLICATION PROGRAM INPUT PARAMETERS FOR THE SQL STATEMENT, REASON reason';
                break;
            case '-805':
                $keterangan = 'DBRM OR PACKAGE NAME location-name.collection-id.dbrm-name.consistency-token NOT FOUND IN PLAN plan-name. REASON reason-code';
                break;
            case '-807':
                $keterangan = 'ACCESS DENIED: PACKAGE package-name IS NOT ENABLED FOR ACCESS FROM connection-type connection-name';
                break;
            case '-808':
                $keterangan = 'THE CONNECT STATEMENT IS NOT CONSISTENT WITH THE FIRST CONNECT STATEMENT';
                break;
            case '-811':
                $keterangan = 'THE RESULT OF AN EMBEDDED SELECT STATEMENT OR A SUBSELECT IN THE SET CLAUSE OF AN UPDATE STATEMENT IS A TABLE OF MORE THAN ONE ROW, OR THE RESULT OF A SUBQUERY OF A BASIC PREDICATE IS MORE THAN ONE VALUE';
                break;
            case '-812':
                $keterangan = 'THE SQL STATEMENT CANNOT BE PROCESSED BECAUSE A BLANK COLLECTION-ID WAS FOUND IN THE CURRENT PACKAGESET SPECIAL REGISTER WHILE TRYING TO FORM A QUALIFIED PACKAGE NAME FOR PROGRAM program-name.consistency-token USING PLAN plan-name';
                break;
            case '-817':
                $keterangan = 'THE SQL STATEMENT CANNOT BE EXECUTED BECAUSE THE STATEMENT WILL RESULT IN A PROHIBITED DATA CHANGE OPERATION.';
                break;
            case '-818':
                $keterangan = 'THE PRECOMPILER-GENERATED TIMESTAMP x IN THE LOAD MODULE IS DIFFERENT FROM THE BIND TIMESTAMP y BUILT FROM THE DBRM z';
                break;
            case '-819':
                $keterangan = 'THE VIEW CANNOT BE PROCESSED BECAUSE THE LENGTH OF ITS PARSE TREE IN THE CATALOG IS ZERO';
                break;
            case '-820':
                $keterangan = 'THE SQL STATEMENT CANNOT BE PROCESSED BECAUSE catalog-table CONTAINS A VALUE THAT IS NOT VALID IN THIS RELEASE';
                break;
            case '-822':
                $keterangan = 'THE SQLDA CONTAINS AN INVALID DATA ADDRESS OR INDICATOR VARIABLE ADDRESS';
                break;
            case '-840':
                $keterangan = 'TOO MANY ITEMS RETURNED IN A SELECT, INSERT LIST, FROM MERGE, OR FROM UNNEST';
                break;
            case '-842':
                $keterangan = 'A CONNECTION TO location-name ALREADY EXISTS';
                break;
            case '-843':
                $keterangan = 'THE SET CONNECTION OR RELEASE STATEMENT MUST SPECIFY AN EXISTING CONNECTION';
                break;
            case '-845':
                $keterangan = 'A PREVIOUS VALUE EXPRESSION CANNOT BE USED BEFORE THE NEXT VALUE EXPRESSION GENERATES A VALUE IN THE CURRENT APPLICATION PROCESS FOR SEQUENCE sequence-name';
                break;
            case '-846':
                $keterangan = 'INVALID SPECIFICATION OF AN IDENTITY COLUMN OR SEQUENCE OBJECT object-type object-name. REASON CODE = reason-code';
                break;
            case '-867':
                $keterangan = 'INVALID SPECIFICATION OF A ROWID COLUMN';
                break;
            case '-870':
                $keterangan = 'THE NUMBER OF HOST VARIABLES IN THE STATEMENT IS NOT EQUAL TO THE NUMBER OF DESCRIPTORS';
                break;
            case '-872':
                $keterangan = 'A VALID CCSID HAS NOT YET BEEN SPECIFIED FOR THIS SUBSYSTEM';
                break;
            case '-873':
                $keterangan = 'THE STATEMENT REFERENCED DATA ENCODED WITH DIFFERENT ENCODING SCHEMES OR CCSIDS IN AN INVALID CONTEXT';
                break;
            case '-874':
                $keterangan = 'THE ENCODING SCHEME SPECIFIED FOR THE object-type MUST BE THE SAME AS THE CONTAINING TABLE SPACE OR OTHER PARAMETERS';
                break;
            case '-875':
                $keterangan = 'operand CANNOT BE USED WITH THE ASCII DATA REFERENCED';
                break;
            case '-876':
                $keterangan = 'object-type CANNOT BE CREATED OR ALTERED, REASON reason-code';
                break;
            case '-877':
                $keterangan = 'CCSID ASCII OR CCSID UNICODE IS NOT ALLOWED FOR THIS DATABASE OR TABLE SPACE';
                break;
            case '-878':
                $keterangan = 'THE explain-object USED FOR EXPLAIN MUST BE ENCODED IN UNICODE. IT CANNOT BE IN ASCII OR EBCDIC.';
                break;
            case '-879':
                $keterangan = 'CREATE or ALTER STATEMENT FOR object-name CANNOT DEFINE A COLUMN, TYPE, VARIABLE, FUNCTION OR STORED PROCEDURE PARAMETER AS MIXED OR GRAPHIC WITH ENCODING SCHEME encoding-scheme';
                break;
            case '-880':
                $keterangan = 'SAVEPOINT savepoint-name DOES NOT EXIST OR IS INVALID IN THIS CONTEXT';
                break;
            case '-881':
                $keterangan = 'A SAVEPOINT WITH NAME savepoint-name ALREADY EXISTS, BUT THIS SAVEPOINT NAME CANNOT BE REUSED';
                break;
            case '-882':
                $keterangan = 'SAVEPOINT DOES NOT EXIST';
                break;
            case '-900':
                $keterangan = 'THE SQL STATEMENT CANNOT BE EXECUTED BECAUSE THE APPLICATION PROCESS IS NOT CONNECTED TO A SERVER';
                break;
            case '-901':
                $keterangan = 'UNSUCCESSFUL EXECUTION CAUSED BY A SYSTEM ERROR THAT DOES NOT PRECLUDE THE SUCCESSFUL EXECUTION OF SUBSEQUENT SQL STATEMENTS';
                break;
            case '-902':
                $keterangan = 'POINTER TO THE ESSENTIAL CONTROL BLOCK (CT/RDA) HAS VALUE 0, REBIND REQUIRED';
                break;
            case '-904':
                $keterangan = 'UNSUCCESSFUL EXECUTION CAUSED BY AN UNAVAILABLE RESOURCE. REASON reason-code, TYPE OF RESOURCE resource-type, AND RESOURCE NAME resource-name';
                break;
            case '-905':
                $keterangan = 'UNSUCCESSFUL EXECUTION DUE TO RESOURCE LIMIT BEING EXCEEDED, RESOURCE NAME = resource-name LIMIT = limit-amount1 CPU SECONDS (limit-amount2 SERVICE UNITS) DERIVED FROM limit-source';
                break;
            case '-906':
                $keterangan = 'THE SQL STATEMENT CANNOT BE EXECUTED BECAUSE THIS FUNCTION IS DISABLED DUE TO A PRIOR ERROR';
                break;
            case '-908':
                $keterangan = 'bind-type ERROR USING auth-id AUTHORITY. BIND, REBIND OR AUTO-REBIND OPERATION IS NOT ALLOWED';
                break;
            case '-909':
                $keterangan = 'THE OBJECT HAS BEEN DELETED OR ALTERED';
                break;
            case '-910':
                $keterangan = 'THE SQL STATEMENT CANNOT ACCESS AN OBJECT ON WHICH UNCOMMITTED CHANGES ARE PENDING';
                break;
            case '-911':
                $keterangan = 'THE CURRENT UNIT OF WORK HAS BEEN ROLLED BACK DUE TO DEADLOCK OR TIMEOUT. REASON reason-code, TYPE OF RESOURCE resource-type, AND RESOURCE NAME resource-name';
                break;
            case '-913':
                $keterangan = 'UNSUCCESSFUL EXECUTION CAUSED BY DEADLOCK OR TIMEOUT. REASON CODE reason-code, TYPE OF RESOURCE resource-type, AND RESOURCE NAME resource-name';
                break;
            case '-917':
                $keterangan = 'BIND PACKAGE FAILED';
                break;
            case '-918':
                $keterangan = 'THE SQL STATEMENT CANNOT BE EXECUTED BECAUSE A CONNECTION HAS BEEN LOST';
                break;
            case '-919':
                $keterangan = 'A ROLLBACK OPERATION IS REQUIRED';
                break;
            case '-922':
                $keterangan = 'AUTHORIZATION FAILURE: error-type ERROR. REASON reason-code';
                break;
            case '-923':
                $keterangan = 'CONNECTION NOT ESTABLISHED: DB2 condition REASON reason-code, TYPE resource-type, NAME resource-name';
                break;
            case '-924':
                $keterangan = 'DB2 CONNECTION INTERNAL ERROR, function-code,return-code,reason-code';
                break;
            case '-925':
                $keterangan = 'COMMIT NOT VALID IN IMS, CICS® OR RRSAF ENVIRONMENT';
                break;
            case '-926':
                $keterangan = 'ROLLBACK NOT VALID IN IMS, CICS OR RRSAF ENVIRONMENT';
                break;
            case '-927':
                $keterangan = 'THE LANGUAGE INTERFACE (LI) WAS CALLED WHEN THE CONNECTING ENVIRONMENT WAS NOT ESTABLISHED. THE PROGRAM SHOULD BE INVOKED UNDER THE DSN COMMAND';
                break;
            case '-929':
                $keterangan = 'FAILURE IN A DATA CAPTURE EXIT: token';
                break;
            case '-939':
                $keterangan = 'ROLLBACK REQUIRED DUE TO UNREQUESTED ROLLBACK OF A REMOTE SERVER';
                break;
            case '-947':
                $keterangan = 'THE SQL STATEMENT FAILED BECAUSE IT WILL CHANGE A TABLE DEFINED WITH DATA CAPTURE CHANGES, BUT THE DATA CANNOT BE PROPAGATED';
                break;
            case '-948':
                $keterangan = 'DISTRIBUTED OPERATION IS INVALID';
                break;
            case '-950':
                $keterangan = 'THE LOCATION NAME SPECIFIED IN THE CONNECT STATEMENT IS INVALID OR NOT LISTED IN THE COMMUNICATIONS DATABASE';
                break;
            case '-951':
                $keterangan = 'OBJECT object-name OBJECT TYPE object-type IS IN USE AND CANNOT BE THE TARGET OF THE SPECIFIED ALTER STATEMENT';
                break;
            case '-952':
                $keterangan = 'PROCESSING WAS INTERRUPTED BY A CANCEL REQUEST FROM A CLIENT PROGRAM';
                break;
            case '-981':
                $keterangan = 'THE SQL STATEMENT FAILED BECAUSE THE RRSAF CONNECTION IS NOT IN A STATE THAT ALLOWS SQL OPERATIONS, REASON reason-code.';
                break;
            case '-989':
                $keterangan = 'AFTER TRIGGER trigger-name ATTEMPTED TO MODIFY A ROW IN TABLE table-name THAT WAS MODIFIED BY AN SQL DATA CHANGE STATEMENT WITHIN A FROM CLAUSE';
                break;
            case '-991':
                $keterangan = 'CALL ATTACH WAS UNABLE TO ESTABLISH AN IMPLICIT CONNECT OR OPEN TO DB2. RC1= rc1 RC2= rc2';
                break;
            case '-992':
                $keterangan = 'PACKAGE package-name CANNOT BE EXECUTED OR DEPLOYED ON LOCATION location-name';
                break;
            case '-1403':
                $keterangan = 'THE USERNAME AND/OR PASSWORD SUPPLIED IS INCORRECT';
                break;
            case '-1760':
                $keterangan = 'CREATE PROCEDURE FOR procedure-name MUST HAVE VALID LANGUAGE AND EXTERNAL CLAUSES';
                break;
            case '-2001':
                $keterangan = 'THE NUMBER OF HOST VARIABLE PARAMETERS FOR A STORED PROCEDURE IS NOT EQUAL TO THE NUMBER OF EXPECTED HOST VARIABLE PARAMETERS. ACTUAL NUMBER sqldanum, EXPECTED NUMBER opnum';
                break;
            case '-4302':
                $keterangan = 'JAVA STORED PROCEDURE OR USER-DEFINED FUNCTION routine-name (SPECIFIC NAME specific-name) HAS EXITED WITH AN EXCEPTION exception-string';
                break;
            case '-4700':
                $keterangan = 'ATTEMPT TO USE NEW FUNCTION BEFORE NEW FUNCTION MODE';
                break;
            case '-4701':
                $keterangan = 'THE NUMBER OF PARTITIONS, OR THE COMBINATION OF THE NUMBER OF TABLE SPACE PARTITIONS AND THE CORRESPONDING LENGTH OF THE PARTITIONING LIMIT KEY EXCEEDS THE SYSTEM LIMIT; OR THE COMBINATION OF THE NUMBER OF TABLE SPACE PARTITIONS EXCEEDS THE MAXPARTITIONS FOR PARTITION BY GROWTH TABLE SPACE.';
                break;
            case '-4704':
                $keterangan = 'AN UNSUPPORTED DATA TYPE WAS ENCOUNTERED AS AN INCLUDE COLUMN';
                break;
            case '-4705':
                $keterangan = 'option SPECIFIED ON ALTER STATEMENT FOR routine-name (routine-type) IS NOT VALID';
                break;
            case '-4706':
                $keterangan = 'ALTER STATEMENT FOR AN SQL ROUTINE CANNOT BE PROCESSED BECAUSE THE OPTIONS CURRENTLY IN EFFECT (ENVID current-envid) ARE NOT THE SAME AS THE ONES THAT WERE IN EFFECT (ENVID defined-envid) WHEN THE ROUTINE OR VERSION WAS FIRST DEFINED';
                break;
            case '-4709':
                $keterangan = 'EXPLAIN MONITORED STMTS FAILED WITH REASON CODE = yyyyy';
                break;
            case '-4710':
                $keterangan = 'EXCHANGE DATA STATEMENT SPECIFIED table1 and table2 BUT THE TABLES DO NOT HAVE A DEFINED CLONE RELATIONSHIP';
                break;
            case '-4727':
                $keterangan = 'SYSTEM PARAMETER system-parameter VALUE parameter-value IS INCONSISTENT WITH CLAUSE clause SPECIFIED ON statement-name STATEMENT.';
                break;
            case '-4728':
                $keterangan = 'ANOTHER VERSION OF ROUTINE routine-name EXISTS AND IS DEFINED WITH AN INCOMPATIBLE OPTION. THE OPTION IS option-name.';
                break;
            case '-4729':
                $keterangan = 'PROCEDURE IS DEFINED AS AUTONOMOUS, AND CANNOT BE INVOKED BECAUSE THE NESTED ENVIRONMENT ALREADY INVOKED AN AUTONOMOUS PROCEDURE.';
                break;
            case '-4730':
                $keterangan = 'INVALID SPECIFICATION OF XML COLUMN table-name.column-name IS NOT DEFINED IN THE XML VERSIONING FORMAT, REASON reason-code';
                break;
            case '-4731':
                $keterangan = 'THE NATIVE SQL ROUTINE STATEMENT FOR PACKAGE location-name.collection-id.program-name.consistency-token STATEMENT NUMBER statement-number CANNOT BE PROCESSED.';
                break;
            case '-4732':
                $keterangan = 'THE MAXIMUM NUMBER OF ALTERS ALLOWED HAS BEEN EXCEEDED FOR object-type';
                break;
            case '-4733':
                $keterangan = 'THE ALTER TABLE STATEMENT CANNOT BE EXECUTED BECAUSE COLUMN column-name IS MIXED DATA, OR THE DATA TYPE OR LENGTH SPECIFIED DOES NOT AGREE WITH THE EXISTING DATA TYPE OR LENGTH';
                break;
            case '-4734':
                $keterangan = 'THE LOAD MODULE FOR THE PROCEDURE ASSUMES A PARAMETER VARCHAR OPTION THAT IS NOT CONSISTENT WITH THE OPTION SPECIFIED ON THE CREATE PROCEDURE STATEMENT FOR procedure-name';
                break;
            case '-4735':
                $keterangan = 'INVALID TABLE REFERENCE FOR TABLE LOCATOR';
                break;
            case '-4736':
                $keterangan = 'A PERIOD SPECIFICATION OR PERIOD CLAUSE IS NOT SUPPORTED AS SPECIFIED FOR OBJECT object-name. REASON CODE = reason-code.';
                break;
            case '-4737':
                $keterangan = 'STATEMENT statement IS NOT ALLOWED WHEN USING A TRUSTED CONNECTION';
                break;
            case '-4738':
                $keterangan = 'TABLE table-name CANNOT BE DEFINED AS SPECIFIED IN THE statement STATEMENT IN A COMMON CRITERIA ENVIRONMENT';
                break;
            case '-4739':
                $keterangan = 'ENVIRONMENT SETTINGS (IDENTIFIED BY envid1) USED BY object-name ARE NOT THE SAME AS THE ONES THAT WERE IN EFFECT (IDENTIFIED BYenvid2) WHEN OTHER COLUMN MASKS AND ROW PERMISSIONS WERE DEFINED FOR TABLE table-name';
                break;
            case '-4742':
                $keterangan = 'THE STATEMENT CANNOT BE EXECUTED BY DB2 OR IN THE ACCELERATOR (REASON reason-code)';
                break;
            case '-4743':
                $keterangan = 'ATTEMPT TO USE NEW FUNCTION WHEN THE APPLICATION COMPATIBILITY SETTING IS SET FOR A PREVIOUS LEVEL';
                break;
            case '-4744':
                $keterangan = 'THE STATEMENT EXPLICITLY OR IMPLICITLY REFERENCED TEMPORAL TABLE table-name IN AN UNSUPPORTED CONTEXT. REASON CODE reason-code.';
                break;
            case '-4746':
                $keterangan = 'THE STATEMENT CANNOT BE PROCESSED FOR AN ACCELERATED QUERY. REASON CODE reason-code.';
                break;
            case '-4747':
                $keterangan = 'THE CREATE OR ALTER TABLE STATEMENT FAILED BECAUSE SOME FUNCTIONALITY WAS SPECIFIED IN THE TABLE DEFINITION THAT IS NOT SUPPORTED WITH THE TABLE TYPE. UNSUPPORTED FUNCTIONALITY:functionality-keyword.';
                break;
            case '-4751':
                $keterangan = 'bind-type FOR PACKAGE  = package-name FAILED BECAUSE OF THE USE OF keyword. ONE OR MORE STATEMENTS WERE NOT SUCCESSFULLY PROCESSED.';
                break;
            case '-4753':
                $keterangan = 'function-name FUNCTION FAILURE, RC=return-code REASON=reason-code WAS RECEIVED FROM z/OS® UNICODE SERVICES';
                break;
            case '-5001':
                $keterangan = 'TABLE table-name IS NOT VALID';
                break;
            case '-5012':
                $keterangan = 'HOST VARIABLE host-variable IS NOT EXACT NUMERIC WITH SCALE ZERO';
                break;
            case '-7008':
                $keterangan = 'object-name NOT VALID FOR OPERATION (reason-code)';
                break;
            case '-16000':
                $keterangan = 'AN XQUERY EXPRESSION CANNOT BE PROCESSED BECAUSE THE context-component COMPONENT OF THE STATIC CONTEXT HAS NOT BEEN ASSIGNED. ERROR QNAME = err:XPST0001';
                break;
            case '-16001':
                $keterangan = 'AN XQUERY EXPRESSION STARTING WITH TOKEN token CANNOT BE PROCESSED BECAUSE THE FOCUS COMPONENT OF THE DYNAMIC CONTEXT HAS NOT BEEN ASSIGNED. ERROR QNAME = err:XPDY0002';
                break;
            case '-16002':
                $keterangan = 'AN XQUERY EXPRESSION HAS AN UNEXPECTED TOKEN token FOLLOWING text. EXPECTED TOKENS MAY INCLUDE: token-list. ERROR QNAME= ERR:XPST0003';
                break;
            case '-16003':
                $keterangan = 'AN EXPRESSION OF DATA TYPE value-type CANNOT BE USED WHEN THE DATA TYPE expected-type IS EXPECTED IN THE CONTEXT. ERROR QNAME= err:XPTY0004';
                break;
            case '-16005':
                $keterangan = 'AN XQUERY EXPRESSION REFERENCES AN ELEMENT NAME, ATTRIBUTE NAME, TYPE NAME, FUNCTION NAME, NAMESPACE PREFIX, OR VARIABLE NAME undefined-name THAT IS NOT DEFINED WITHIN THE STATIC CONTEXT. ERROR QNAME= ERR:XPST0008';
                break;
            case '-16007':
                $keterangan = '16007 THE XQUERY PATH EXPRESSION REFERENCES AN AXIS axis-type THAT IS NOT SUPPORTED. ERROR QNAME = err:XQST0010';
                break;
            case '-16009':
                $keterangan = 'AN XQUERY FUNCTION NAMED function-name WITH number-of-parms PARAMETERS IS NOT DEFINED IN THE STATIC CONTEXT. ERROR QNAME= err:XPST0017';
                break;
            case '-16011':
                $keterangan = 'THE RESULT OF AN INTERMEDIATE STEP EXPRESSION IN AN XQUERY PATH EXPRESSION CONTAINS AN ATOMIC VALUE. ERROR QNAME = err:XPTY0019';
                break;
            case '-16012':
                $keterangan = 'THE CONTEXT ITEM IN AN AXIS STEP MUST BE A NODE. ERROR QNAME = err:XPTY0020';
                break;
            case '-16015':
                $keterangan = 'AN ELEMENT CONSTRUCTOR CONTAINS AN ATTRIBUTE NODE NAMED attribute-name THAT FOLLOWS AN XQUERY NODE THAT IS NOT AN ATTRIBUTE NODE. ERROR QNAME = err:error-name';
                break;
            case '-16016':
                $keterangan = 'THE ATTRIBUTE NAME attribute-name CANNOT BE USED MORE THAN ONCE IN AN ELEMENT CONSTRUCTOR. ERROR QNAME = err:XQTY0025';
                break;
            case '-16020':
                $keterangan = 'THE CONTEXT NODE IN A PATH EXPRESSION THAT BEGINS WITH AN INITIAL "/" OR "//" DOES NOT HAVE AN XQUERY DOCUMENT NODE ROOT. ERROR QNAME = err:XPDY0050';
                break;
            case '-16022':
                $keterangan = 'OPERANDS OF TYPES xquery-data-types ARE NOT VALID FOR OPERATOR operator-name . ERROR QNAME = err:XPTY0004';
                break;
            case '-16023':
                $keterangan = 'THE XQUERY PROLOG CANNOT CONTAIN MULTIPLE DECLARATIONS FOR THE SAME NAMESPACE PREFIX ns-prefix. ERROR QNAME = err:XQST0033';
                break;
            case '-16024':
                $keterangan = 'THE NAMESPACE PREFIX prefix-name CANNOT BE REDECLARED OR CANNOT BE BOUND TO THE SPECIFIED URI. ERROR QNAME = err:XQST0070';
                break;
            case '-16026':
                $keterangan = 'THE NAME attribute-name IS USED FOR MORE THAN ONE ATTRIBUTE IN THE CONSTRUCTOR FOR THE ELEMENT NAMED element-name. ERROR QNAME=err:XQST0040';
                break;
            case '-16029':
                $keterangan = 'TWO OR MORE NAMESPACES WITHIN THE SAME XQUERY ELEMENT CONSTRUCTOR USE THE SAME NAMESPACE PREFIX prefix-name. ERROR QNAME=err:XQST0071';
                break;
            case '-16031':
                $keterangan = 'XQUERY LANGUAGE FEATURE USING SYNTAX string IS NOT SUPPORTED';
                break;
            case '-16032':
                $keterangan = 'THE STRING string IS NOT A VALID URI. ERROR QNAME = err:XQST0046';
                break;
            case '-16033':
                $keterangan = 'THE TARGET DATA TYPE type-name OF A CASTABLE EXPRESSION IS NOT AN ATOMIC DATA TYPE DEFINED FOR THE IN-SCOPE XML SCHEMA TYPES OR IS A DATA TYPE THAT CANNOT BE USED IN A CASTABLE EXPRESSION. ERROR QNAME=err:XPST0080';
                break;
            case '-16036':
                $keterangan = 'THE URI THAT IS SPECIFIED IN A NAMESPACE DECLARATION CANNOT BE A ZERO-LENGTH STRING';
                break;
            case '-16038':
                $keterangan = 'THE ARGUMENTS OF FN:DATETIME HAVE DIFFERENT TIMEZONES. ERROR QNAME=ERR:FORG0008.';
                break;
            case '-16041':
                $keterangan = 'AN IMPLICIT OR EXPLICIT INVOCATION OF THE fn:boolean FUNCTION IN THE XQUERY EXPRESSION COULD NOT COMPUTE THE EFFECTIVE BOOLEAN VALUE OF THE SEQUENCE. ERROR QNAME=err:FORG0006';
                break;
            case '-16046':
                $keterangan = 'A NUMERIC XQUERY EXPRESSION ATTEMPTED TO DIVIDE BY ZERO. ERROR QNAME = err:FOAR0001';
                break;
            case '-16047':
                $keterangan = 'AN XQUERY EXPRESSION RESULTED IN ARITHMETIC OVERFLOW OR UNDERFLOW. ERROR QNAME= err:FOAR0002';
                break;
            case '-16048':
                $keterangan = 'AN XQUERY PROLOG CANNOT CONTAIN MORE THAN ONE declaration-type DECLARATION. ERROR QNAME = error-qname';
                break;
            case '-16049':
                $keterangan = 'THE LEXICAL VALUE value IS NOT VALID FOR THE type-name DATA TYPE IN THE FUNCTION OR CAST. ERROR QNAME= err:FOCA0002';
                break;
            case '-16051':
                $keterangan = 'THE VALUE value OF DATA TYPE source-type IS OUT OF RANGE FOR AN IMPLICIT OR EXPLICIT CAST TO TARGET DATA TYPE target-type. ERROR QNAME = err:error-qname';
                break;
            case '-16052':
                $keterangan = 'NAN CANNOT BE USED AS A FLOAT OR DOUBLE VALUE IN A DATETIME OPERATION. ERROR QNAME=ERR:FOCA0005.';
                break;
            case '-16055':
                $keterangan = 'AN ARITHMETIC OPERATION INVOLVING A DATETIME VALUE RESULTED IN OVERFLOW. ERROR QNAME=ERR:FODT0001.';
                break;
            case '-16056':
                $keterangan = 'AN ARITHMETIC OPERATION INVOLVING A DURATION VALUE RESULTED IN OVERFLOW. ERROR QNAME=ERR:FODT0002.';
                break;
            case '-16057':
                $keterangan = 'A TIMEZONE VALUE IS NOT VALID. ERROR QNAME=ERR:FODT0003.';
                break;
            case '-16061':
                $keterangan = 'THE VALUE value CANNOT BE CONSTRUCTED AS, OR CAST (USING AN IMPLICIT OR EXPLICIT CAST) TO THE DATA TYPE data-type. ERROR QNAME = err:FORG0001';
                break;
            case '-16065':
                $keterangan = 'AN EMPTY SEQUENCE CANNOT BE CAST TO THE DATA TYPE data-type, ERROR QNAME = err:FORG0006';
                break;
            case '-16066':
                $keterangan = 'THE ARGUMENT PASSED TO THE AGGREGATE FUNCTION function-name IS NOT VALID. ERROR QNAME = err:FORG0006';
                break;
            case '-16067':
                $keterangan = 'THE FLAGS ARGUMENT VALUE PASSED TO THE FUNCTION function-name IS NOT VALID. ERROR QNAME= err:FORX0001';
                break;
            case '-16068':
                $keterangan = 'THE REGULAR EXPRESSION ARGUMENT VALUE PASSED TO THE FUNCTION function-name IS NOT VALID. ERROR QNAME= err:FORX0002';
                break;
            case '-16069':
                $keterangan = 'A REGULAR EXPRESSION ARGUMENT value PASSED TO THE FUNCTION function-name MATCHES A ZERO-LENGTH STRING. ERROR QNAME= err:FORX0003';
                break;
            case '-16075':
                $keterangan = 'THE SEQUENCE TO BE SERIALIZED CONTAINS AN ITEM THAT IS AN ATTRIBUTE NODE. ERROR QNAME = err:SENR0001';
                break;
            case '-16080':
                $keterangan = 'AN XQUERY EXPRESSION INCLUDES ONE OR MORE expression-type EXPRESSIONS OUTSIDE THE XQUERY-UPDATE-CONSTANT OF AN XMLMODIFY FUNCTION. ERROR QNAME=err:XUST0001.';
                break;
            case '-16081':
                $keterangan = 'THE XQUERY-UPDATE-CONSTANT IN THE XMLMODIFY FUNCTION IS NOT AN UPDATING EXPRESSION OR AN EMPTY SEQUENCE EXPRESSION. ERROR QNAME=err:XUST0002.';
                break;
            case '-16085':
                $keterangan = 'THE TARGET NODE OF AN XQUERY expression-type EXPRESSION IS NOT VALID. ERROR QNAME=err:error-name.';
                break;
            case '-16086':
                $keterangan = 'THE REPLACEMENT SEQUENCE OF A REPLACE EXPRESSION CONTAINS INVALID NODES FOR THE SPECIFIED TARGET NODE. ERROR QNAME=err:error-name.';
                break;
            case '-16087':
                $keterangan = 'THE RESULT OF APPLYING THE UPDATING EXPRESSIONS IN THE XMLMODIFY FUNCTION IS NOT A VALID INSTANCE OF THE XQUERY AND XPATH DATA MODEL. ADDITIONAL INFORMATION: information-1, information-2. ERROR QNAME=err:XUDY0021.';
                break;
            case '-16088':
                $keterangan = 'AN expression-type EXPRESSION HAS A BINDING OF A NAMESPACE PREFIX prefix-string TO NAMESPACE URI uri-string, INTRODUCED TO AN ELEMENT NAMED element-name, THAT CONFLICTS WITH AN EXISTING NAMESPACE BINDING OF THE SAME PREFIX TO A DIFFERENT URI IN THE IN-SCOPE NAMESPACES OF THAT ELEMENT NODE. ERROR QNAME=err:XUDY0023.';
                break;
            case '-16089':
                $keterangan = 'AN expression-type EXPRESSION AND POSSIBLY OTHER UPDATING EXPRESSIONS IN AN XMLMODIFY FUNCTION INTRODUCE CONFLICTING NAMESPACE BINDINGS INTO AN ELEMENT NAMED element-name. THE PREFIX prefix-string IS BOUND TO uri-string WHILE ANOTHER BINDING OF THE SAME PREFIX USES A DIFFERENT NAMESPACE URI. ERROR QNAME=err:XUDY0024.';
                break;
            case '-16246':
                $keterangan = 'INCOMPLETE ANNOTATION MAPPING AT OR NEAR LINE lineno IN XML SCHEMA DOCUMENT uri. REASON CODE = reason-code.';
                break;
            case '-16247':
                $keterangan = 'SOURCE XML TYPE source-data-type CANNOT BE MAPPED TO TARGET SQL TYPE target-data-type IN THE ANNOTATION AT OR NEAR LINE lineno IN XML SCHEMA DOCUMENT uri';
                break;
            case '-16248':
                $keterangan = 'UNKNOWN ANNOTATION annotation-name AT OR NEAR LINE lineno IN XML SCHEMA DOCUMENT uri';
                break;
            case '-16249':
                $keterangan = 'THE db2-xdb:expression ANNOTATION expression AT OR NEAR LINE lineno IN XML SCHEMA DOCUMENT uri IS TOO LONG.';
                break;
            case '-16250':
                $keterangan = 'THE db2-xdb:defaultSQLSchema WITH VALUE schema-name AT OR NEAR LINE lineno IN XML SCHEMA DOCUMENT uri CONFLICTS WITH ANOTHER db2-xdb:defaultSQLSchema SPECIFIED IN ONE OF THE XML SCHEMA DOCUMENTS WITHIN THE SAME XML SCHEMA.';
                break;
            case '-16251':
                $keterangan = 'DUPLICATE ANNOTATION DEFINED FOR object-name AT OR NEAR location IN XML SCHEMA DOCUMENT uri';
                break;
            case '-16252':
                $keterangan = 'THE db2-xdb:rowSet NAME rowset-name SPECIFIED AT OR NEAR LINE lineno IN THE XML SCHEMA DOCUMENT uri IS ALREADY ASSOCIATED WITH ANOTHER TABLE';
                break;
            case '-16253':
                $keterangan = 'THE db2-xdb:condition ANNOTATION condition AT OR NEAR LINE lineno IN XML SCHEMA DOCUMENT uri IS TOO LONG.';
                break;
            case '-16254':
                $keterangan = 'A db2-xdb:locationPath locationpath AT OR NEAR LINE lineno IN XML SCHEMA DOCUMENT uri IS NOT VALID WITH REASON CODE reason-code.';
                break;
            case '-16255':
                $keterangan = 'A db2-xdb:rowSet VALUE rowset-name USED AT OR NEAR LINE lineno IN XML SCHEMA DOCUMENT uri CONFLICTS WITH A db2-xdb:table ANNOTATION WITH THE SAME NAME.';
                break;
            case '-16257':
                $keterangan = 'XML SCHEMA FEATURE feature SPECIFIED IS NOT SUPPORTED FOR DECOMPOSITION.';
                break;
            case '-16258':
                $keterangan = 'THE XML SCHEMA CONTAINS A RECURSIVE ELEMENT WHICH IS AN UNSUPPORTED FEATURE FOR DECOMPOSITION. THE RECURSIVE ELEMENT IS IDENTIFIED AS elementnamespace : elementname OF TYPE typenamespace : typename.';
                break;
            case '-16259':
                $keterangan = 'INVALID MANY-TO-MANY MAPPINGS DETECTED IN XML SCHEMA DOCUMENT uri1 NEAR LINE lineno1 AND IN XML SCHEMA DOCUMENT uri2 NEAR LINE lineno2.';
                break;
            case '-16260':
                $keterangan = 'XML SCHEMA ANNOTATIONS INCLUDE NO MAPPINGS TO ANY COLUMN OF ANY TABLE.';
                break;
            case '-16262':
                $keterangan = 'THE ANNOTATED XML SCHEMA HAS NO COLUMNS MAPPED FOR ROWSET rowsetname.';
                break;
            case '-16265':
                $keterangan = 'THE XML DOCUMENT CANNOT BE DECOMPOSED USING XML SCHEMA xsrobject-name WHICH IS NOT ENABLED OR IS INOPERATIVE FOR DECOMPOSITION.';
                break;
            case '-16266':
                $keterangan = 'AN SQL ERROR OCCURRED DURING DECOMPOSITION OF DOCUMENT docid WHILE ATTEMPTING TO INSERT DATA. INFORMATION RETURNED FOR THE ERROR INCLUDES SQLCODE sqlcode, SQLSTATE sqlstate, AND MESSAGE TOKENS token-list.';
                break;
            case '-20003':
                $keterangan = 'GBPCACHE NONE CANNOT BE SPECIFIED FOR TABLESPACE OR INDEX IN GRECP';
                break;
            case '-20004':
                $keterangan = '8K or 16K BUFFERPOOL PAGESIZE INVALID FOR A WORKFILE OBJECT';
                break;
            case '-20005':
                $keterangan = 'THE INTERNAL ID LIMIT OF limit HAS BEEN EXCEEDED FOR OBJECT TYPE object-type';
                break;
            case '-20008':
                $keterangan = 'ATTEMPT TO USE UNSUPPORTED FEATURE msg-token. REASON CODE: reason-code';
                break;
            case '-20016':
                $keterangan = 'THE VALUE OF THE INLINE LENGTH ASSOCIATED WITH object-name IS TOO BIG OR THE INLINE LENGTH CLAUSE IS NOT ALLOWED IN THE CONTEXT.';
                break;
            case '-20019':
                $keterangan = 'THE RESULT TYPE RETURNED FROM THE FUNCTION BODY CANNOT BE ASSIGNED TO THE DATA TYPE DEFINED IN THE RETURNS CLAUSE';
                break;
            case '-20038':
                $keterangan = 'THE STATEMENT COULD NOT BE PROCESSED BECAUSE THE STATEMENT CONTAINS THE FOLLOWING INCOMPATIBLE CLAUSES OR ELEMENTS: keywords1 AND keywords2.';
                break;
            case '-20046':
                $keterangan = 'THE SELECTIVITY CLAUSE FOLLOWING predicate-string CAN ONLY SPECIFIED FOR A SPATIAL PREDICATE FUNCTION.';
                break;
            case '-20058':
                $keterangan = 'THE FULLSELECT SPECIFIED FOR MATERIALIZED QUERY TABLE table-name IS NOT VALID.';
                break;
            case '-20060':
                $keterangan = 'UNSUPPORTED DATA TYPE data-type ENCOUNTERED IN SQL object-type object-name';
                break;
            case '-20070':
                $keterangan = 'AUXILIARY TABLE table-name CANNOT BE CREATED BECAUSE COLUMN column-name IS NOT A LOB COLUMN';
                break;
            case '-20071':
                $keterangan = 'WLM ENVIRONMENT NAME MUST BE SPECIFIED function-name';
                break;
            case '-20072':
                $keterangan = 'csect-name bind-type bind-subtype ERROR USING authorization-id AUTHORITY. OPERATION IS NOT ALLOWED ON A package-type PACKAGE package-name';
                break;
            case '-20073':
                $keterangan = 'THE FUNCTION function-name CANNOT BE ALTERED BECAUSE IT IS REFERENCED IN EXISTING VIEW OR MATERIALIZED QUERY TABLE DEFINITIONS';
                break;
            case '-20074':
                $keterangan = 'THE OBJECT object-name CANNOT BE CREATED BECAUSE THE FIRST THREE CHARACTERS ARE RESERVED FOR SYSTEM OBJECTS';
                break;
            case '-20091':
                $keterangan = 'A VIEW NAME WAS SPECIFIED AFTER LIKE IN ADDITION TO THE INCLUDING IDENTITY COLUMN ATTRIBUTES CLAUSE';
                break;
            case '-20092':
                $keterangan = 'A TABLE OR VIEW WAS SPECIFIED IN THE LIKE CLAUSE, BUT THE OBJECT CANNOT BE USED IN THIS CONTEXT';
                break;
            case '-20093':
                $keterangan = 'THE TABLE table-name CANNOT BE CONVERTED TO OR FROM A MATERIALIZED QUERY TABLE, OR THE MATERIALIZED QUERY TABLE PROPERTY CANNOT BE ALTERED. REASON CODE = reason-code.';
                break;
            case '-20094':
                $keterangan = 'THE COLUMN column-name IS A GENERATED COLUMN AND CANNOT BE USED IN THE BEFORE TRIGGER trigger-name.';
                break;
            case '-20100':
                $keterangan = 'AN ERROR OCCURRED WHEN BINDING A TRIGGERED SQL STATEMENT. INFORMATION RETURNED: SECTION NUMBER : section-number SQLCODE sqlerror, SQLSTATE sqlstate, AND MESSAGE TOKENS token-list';
                break;
            case '-20101':
                $keterangan = 'THE FUNCTION function-name FAILED WITH REASON reason-code';
                break;
            case '-20102':
                $keterangan = 'CREATE OR ALTER STATEMENT FOR ROUTINE routine-name SPECIFIED THE option OPTION WHICH IS NOT ALLOWED FOR THE TYPE OF ROUTINE';
                break;
            case '-20104':
                $keterangan = 'AN ATTEMPT TO ALTER A CCSID FROM from-ccsid TO to-ccsid FAILED';
                break;
            case '-20106':
                $keterangan = 'THE CCSID FOR THE TABLE SPACE OR DATABASE CANNOT BE CHANGED BECAUSE THE TABLE SPACE OR DATABASE ALREADY CONTAINS A TABLE THAT IS REFERENCED IN EXISTING VIEW, OR MATERIALIZED QUERY TABLE DEFINITIONS OR AN EXTENDED INDEX';
                break;
            case '-20107':
                $keterangan = 'HOST VARIABLE OR PARAMETER NUMBER position-number CANNOT BE USED AS SPECIFIED BECAUSE REASON reason';
                break;
            case '-20108':
                $keterangan = 'A RESULT SET CONTAINS AN UNSUPPORTED DATA TYPE IN POSITION NUMBER position-number FOR CURSOR cursor-name OPENED BY STORED PROCEDURE procedure-name';
                break;
            case '-20110':
                $keterangan = 'CANNOT IMPLICITLY CONNECT TO A REMOTE SITE WITH A SAVEPOINT OUTSTANDING';
                break;
            case '-20111':
                $keterangan = 'CANNOT ISSUE SAVEPOINT, RELEASE SAVEPOINT, ROLLBACK TO SAVEPOINT FROM A TRIGGER, FROM A USER-DEFINED FUNCTION, OR FROM A GLOBAL TRANSACTION';
                break;
            case '-20117':
                $keterangan = 'A WINDOW SPECIFICATION FOR AN OLAP SPECIFICATION IS NOT VALID. REASON CODE = reason-code.';
                break;
            case '-20120':
                $keterangan = 'AN SQL TABLE FUNCTION MUST RETURN A TABLE RESULT.';
                break;
            case '-20123':
                $keterangan = 'CALL TO STORED PROCEDURE procedure-name FAILED BECAUSE THE RESULT SET RETURNED FOR CURSOR cursor-name IS SCROLLABLE, BUT THE CURSOR IS NOT POSITIONED BEFORE THE FIRST ROW';
                break;
            case '-20124':
                $keterangan = 'OPEN CURSOR cursor FAILED BECAUSE THE CURSOR IS SCROLLABLE BUT THE CLIENT DOES NOT SUPPORT THIS';
                break;
            case '-20125':
                $keterangan = 'CALL TO STORED PROCEDURE procedure-name FAILED BECAUSE THE RESULT SET FOR CURSOR cursor-name IS SCROLLABLE, BUT THE CLIENT DOES NOT SUPPORT THIS, REASON reason-code.';
                break;
            case '-20127':
                $keterangan = 'VALUE SPECIFIED ON FETCH STATEMENT FOR ABSOLUTE OR RELATIVE IS TOO LARGE FOR DRDA';
                break;
            case '-20129':
                $keterangan = 'SPECIAL REGISTER IS NOT VALID AS USED';
                break;
            case '-20142':
                $keterangan = 'SEQUENCE sequence-name CANNOT BE USED AS SPECIFIED';
                break;
            case '-20143':
                $keterangan = 'THE ENCRYPTION OR DECRYPTION FUNCTION FAILED, BECAUSE THE ENCRYPTION PASSWORD VALUE IS NOT SET';
                break;
            case '-20144':
                $keterangan = 'THE ENCRYPTION IS INVALID BECAUSE THE LENGTH OF THE PASSWORD WAS LESS THAN 6 BYTES OR GREATER THAN 127 BYTES';
                break;
            case '-20146':
                $keterangan = 'THE DECRYPTION FAILED. THE DATA IS NOT ENCRYPTED';
                break;
            case '-20147':
                $keterangan = 'THE ENCRYPTION FUNCTION FAILED. MULTIPLE PASS ENCRYPTION IS NOT SUPPORTED';
                break;
            case '-20148':
                $keterangan = 'A RETURN STATEMENT DOES NOT EXIST OR WAS NOT INVOKED DURING THE EXECUTION OF ROUTINE routine-name WITH SPECIFIC NAME specific-name.';
                break;
            case '-20163':
                $keterangan = 'HEXADECIMAL CONSTANT GX IS NOT ALLOWED';
                break;
            case '-20165':
                $keterangan = 'AN SQL DATA CHANGE STATEMENT WITHIN A FROM CLAUSE IS NOT ALLOWED IN THE CONTEXT IN WHICH IT WAS SPECIFIED';
                break;
            case '-20166':
                $keterangan = 'AN SQL DATA CHANGE STATEMENT WITHIN A SELECT SPECIFIED A VIEW view-name WHICH IS NOT A SYMMETRIC VIEW OR COULD NOT HAVE BEEN DEFINED AS A SYMMETRIC VIEW';
                break;
            case '-20177':
                $keterangan = 'SET DATA TYPE CLAUSE ON ALTER TABLE SPECIFIED FLOATING POINT, BUT THIS CHANGE IS DISALLOWED';
                break;
            case '-20178':
                $keterangan = 'VIEW view-name ALREADY HAS AN INSTEAD OF operation TRIGGER DEFINED';
                break;
            case '-20179':
                $keterangan = 'THE INSTEAD OF TRIGGER CANNOT BE CREATED BECAUSE THE VIEW view-name IS DEFINED USING THE WITH CHECK OPTION';
                break;
            case '-20180':
                $keterangan = 'COLUMN column-name IN TABLE table-name CANNOT BE ALTERED AS SPECIFIED';
                break;
            case '-20181':
                $keterangan = 'COLUMN CANNOT BE ADDED TO INDEX index-name';
                break;
            case '-20182':
                $keterangan = 'PARTITIONING CLAUSE clause ON stmt-type STATEMENT FOR index-name IS NOT VALID';
                break;
            case '-20183':
                $keterangan = 'THE PARTITIONED, ADD PARTITION, ADD PARTITIONING KEY, ALTER PARTITION, ROTATE PARTITION, OR PARTITION BY RANGE CLAUSE SPECIFIED ON CREATE OR ALTER FOR table-name IS NOT VALID';
                break;
            case '-20185':
                $keterangan = 'CURSOR cursor-name IS NOT DEFINED TO ACCESS ROWSETS, BUT A CLAUSE WAS SPECIFIED THAT IS VALID ONLY WITH ROWSET ACCESS';
                break;
            case '-20186':
                $keterangan = 'A CLAUSE SPECIFIED FOR THE DYNAMIC SQL STATEMENT BEING PROCESSED IS NOT VALID';
                break;
            case '-20200':
                $keterangan = 'THE INSTALL OR REPLACE OF jar-id WITH URL url FAILED DUE TO REASON reason-code-(reason-string).';
                break;
            case '-20201':
                $keterangan = 'THE INSTALL, REPLACE, REMOVE, OR ALTER OF jar-name FAILED DUE TO REASON reason-code-(reason-string)';
                break;
            case '-20202':
                $keterangan = 'THE REMOVE OF jar-name FAILED AS class IS IN USE';
                break;
            case '-20203':
                $keterangan = 'USER-DEFINED FUNCTION OR PROCEDURE name HAS A JAVA METHOD WITH AN INVALID SIGNATURE. THE ERROR IS AT OR NEAR PARAMETER number. THE SIGNATURE IS signature.';
                break;
            case '-20204':
                $keterangan = 'THE USER-DEFINED FUNCTION OR PROCEDURE routine-name WAS UNABLE TO MAP TO A SINGLE JAVA METHOD';
                break;
            case '-20207':
                $keterangan = 'THE INSTALL OR REMOVE OF jar-name SPECIFIED THE USE OF A DEPLOYMENT DESCRIPTOR.';
                break;
            case '-20210':
                $keterangan = 'THE SQL STATEMENT CANNOT BE EXECUTED BECAUSE IT WAS PRECOMPILED AT A LEVEL THAT IS INCOMPATIBLE WITH THE CURRENT VALUE OF THE ENCODING BIND OPTION OR SPECIAL REGISTER';
                break;
            case '-20211':
                $keterangan = 'THE SPECIFICATION ORDER BY OR FETCH FIRST N ROWS ONLY IS INVALID';
                break;
            case '-20212':
                $keterangan = 'USER-DEFINED ROUTINE name ENCOUNTERED AN EXCEPTION ATTEMPTING TO LOAD JAVA CLASS class-name FROM JAR jar-name. ORIGINAL EXCEPTION: exception-string';
                break;
            case '-20213':
                $keterangan = 'STORED PROCEDURE procedure-name HAS RETURNED A DYNAMIC RESULT SET, PARAMETER number, THAT IS NOT VALID';
                break;
            case '-20223':
                $keterangan = 'THE ENCRYPT_TDES OR DECRYPT FUNCTION FAILED. ENCRYPTION FACILITY NOT AVAILABLE return-code, reason-code';
                break;
            case '-20224':
                $keterangan = 'ENCRYPTED DATA THAT WAS ORIGINALLY A BINARY STRING CANNOT BE DECRYPTED TO A CHARACTER STRING';
                break;
            case '-20227':
                $keterangan = 'REQUIRED CLAUSE IS MISSING FOR ARGUMENT number OF expression';
                break;
            case '-20228':
                $keterangan = 'A STACKED DIAGNOSTICS AREA IS NOT AVAILABLE';
                break;
            case '-20232':
                $keterangan = 'CHARACTER CONVERSION FROM CCSID from-ccsid TO to-ccsid FAILED WITH ERROR CODE error-code FOR TABLE dbid.obid COLUMN column-number REQUESTED BY csect-name';
                break;
            case '-20235':
                $keterangan = 'THE COLUMN column-name CANNOT BE ADDED, ALTERED, or DROPPED BECAUSE table-name IS A MATERIALIZED QUERY TABLE';
                break;
            case '-20240':
                $keterangan = 'INVALID SPECIFICATION OF A SECURITY LABEL COLUMN table-name.column-name REASON CODE reason-code';
                break;
            case '-20248':
                $keterangan = 'ATTEMPTED TO EXPLAIN ALL CACHED STATEMENTS OR A CACHED STATEMENT WITH STMTID OR STMTTOKEN ID-token BUT THE REQUIRED EXPLAIN INFORMATION IS NOT ACCESSIBLE. REASON reason-code';
                break;
            case '-20249':
                $keterangan = 'THE PACKAGE package-name NEEDS TO BE REBOUND IN ORDER TO BE SUCCESSFULLY EXECUTED (required-maintenance)';
                break;
            case '-20252':
                $keterangan = 'DIAGNOSTICS AREA FULL. NO MORE ERRORS CAN BE RECORDED FOR THE NOT ATOMIC STATEMENT';
                break;
            case '-20257':
                $keterangan = 'FINAL TABLE IS NOT VALID WHEN THE TARGET VIEW view-name OF THE SQL DATA CHANGE STATEMENT IN A FULLSELECT HAS AN INSTEAD OF TRIGGER DEFINED';
                break;
            case '-20258':
                $keterangan = 'INVALID USE OF INPUT SEQUENCE ORDERING';
                break;
            case '-20260':
                $keterangan = 'THE ASSIGNMENT CLAUSE OF THE UPDATE OPERATION AND THE VALUES CLAUSE OF THE INSERT OPERATION MUST SPECIFY AT LEAST ONE COLUMN THAT IS NOT AN INCLUDE COLUMN';
                break;
            case '-20264':
                $keterangan = 'FOR TABLE table-name, primary-auth-id WITH SECURITY LABEL primary-auth-id-seclabel IS NOT AUTHORIZED TO PERFORM operation ON A ROW WITH SECURITY LABEL row-seclabel. THE RECORD IDENTIFIER (RID) OF THIS ROW IS rid-number.';
                break;
            case '-20265':
                $keterangan = 'SECURITY LABEL IS reason FOR primary-auth-id';
                break;
            case '-20266':
                $keterangan = 'ALTER VIEW FOR view-name FAILED';
                break;
            case '-20267':
                $keterangan = 'THE FUNCTION function-name (SPECIFIC specific-name) MODIFIES SQL DATA AND IS INVOKED IN AN ILLEGAL CONTEXT. REASON CODE reason-code';
                break;
            case '-20275':
                $keterangan = 'The XML NAME xml-name IS NOT VALID. REASON CODE = reason-code';
                break;
            case '-20276':
                $keterangan = 'The XML namespace prefix xml-namespace-prefix is not valid. Reason code = reason-code';
                break;
            case '-20279':
                $keterangan = 'THE VIEW view-name CANNOT BE ENABLED FOR QUERY OPTIMIZATION. REASON CODE = reason-code';
                break;
            case '-20281':
                $keterangan = 'primary-auth-id DOES NOT HAVE THE MLS WRITE-DOWN PRIVILEGE';
                break;
            case '-20283':
                $keterangan = 'A DYNAMIC CREATE STATEMENT CANNOT BE PROCESSED WHEN THE VALUE OF CURRENT SCHEMA DIFFERS FROM CURRENT SQLID';
                break;
            case '-20286':
                $keterangan = 'DB2 CONVERTED STRING token-type tokenFROM from-ccsid TO to-ccsid, AND RESULTED IN SUBSTITUTION CHARACTERS';
                break;
            case '-20289':
                $keterangan = 'INVALID STRING UNIT unit SPECIFIED FOR FUNCTION function-name';
                break;
            case '-20295':
                $keterangan = 'THE EXECUTION OF A BUILT IN FUNCTION function RESULTED IN AN ERROR REASON CODE reason-code';
                break;
            case '-20300':
                $keterangan = 'THE LIST OF COLUMNS SPECIFIED FOR THE clause CLAUSE IS NOT ALLOWED IN COMBINATION WITH THE LIST OF COLUMNS FOR THE PARTITIONING KEY FOR THE TABLE.';
                break;
            case '-20304':
                $keterangan = 'INVALID INDEX DEFINITION INVOLVING AN XMLPATTERN CLAUSE OR A COLUMN OF DATA TYPE XML. REASON CODE = reason-code';
                break;
            case '-20305':
                $keterangan = 'AN XML VALUE CANNOT BE INSERTED OR UPDATED BECAUSE OF AN ERROR DETECTED WHEN INSERTING OR UPDATING THE INDEX IDENTIFIED BY index-id ON TABLE table-name. REASON CODE = reason-code';
                break;
            case '-20306':
                $keterangan = 'AN INDEX ON AN XML COLUMN CANNOT BE CREATED BECAUSE OF AN ERROR DETECTED WHEN INSERTING THE XML VALUES INTO THE INDEX. REASON CODE = reason-code';
                break;
            case '-20310':
                $keterangan = 'THE REMOVE OF jar-name1 FAILED, AS IT IS IN USE BY jar-name2';
                break;
            case '-20311':
                $keterangan = 'THE VALUE PROVIDED FOR THE NEW JAVA PATH IS ILLEGAL';
                break;
            case '-20312':
                $keterangan = 'THE ALTER OF JAR jar-id FAILED BECAUSE THE SPECIFIED PATH REFERENCES ITSELF';
                break;
            case '-20313':
                $keterangan = 'DEBUG MODE OPTION FOR ROUTINE routine-name CANNOT BE CHANGED';
                break;
            case '-20314':
                $keterangan = 'THE PARAMETER LIST (OR AN OPTION) DOES NOT MATCH THE PARAMETER LIST (OR OPTION) FOR ALL OTHER VERSIONS OF ROUTINE routine-name';
                break;
            case '-20315':
                $keterangan = 'THE CURRENTLY ACTIVE VERSION FOR ROUTINE routine-name (routine-type) CANNOT BE DROPPED';
                break;
            case '-20326':
                $keterangan = 'AN XML ELEMENT NAME, ATTRIBUTE NAME, NAMESPACE PREFIX, OR URI ENDING WITH string-end EXCEEDS THE LIMIT OF 1000 BYTES';
                break;
            case '-20327':
                $keterangan = 'THE DEPTH OF AN XML DOCUMENT EXCEEDS THE LIMIT OF 128 LEVELS';
                break;
            case '-20328':
                $keterangan = 'THE DOCUMENT WITH TARGET NAMESPACE namespace AND SCHEMA LOCATION location HAS ALREADY BEEN ADDED FOR THE XML SCHEMA IDENTIFIED BY schema name';
                break;
            case '-20329':
                $keterangan = 'THE COMPLETION CHECK FOR THE XML SCHEMA FAILED BECAUSE ONE OR MORE XML SCHEMA DOCUMENTS IS MISSING. ONE MISSING XML SCHEMA DOCUMENT IS IDENTIFIED BY uri-type AS uri';
                break;
            case '-20330':
                $keterangan = 'THE object-type IDENTIFIED BY XML uri-type1 uri1 AND XML uri-type2 uri2 IS NOT FOUND IN THE XML SCHEMA REPOSITORY';
                break;
            case '-20331':
                $keterangan = 'THE XML COMMENT VALUE string IS NOT VALID';
                break;
            case '-20332':
                $keterangan = 'THE XML PROCESSING INSTRUCTION VALUE string IS NOT VALID';
                break;
            case '-20335':
                $keterangan = 'MORE THAN ONE xsrobject-type EXISTS IDENTIFIED BY XML uri-type1 uri1 AND uri-type2 uri2 EXISTS IN THE XML SCHEMA REPOSITORY.';
                break;
            case '-20338':
                $keterangan = 'THE DATA TYPE OF EITHER THE SOURCE OR TARGET OPERAND OF AN XMLCAST SPECIFICATION MUST BE XML';
                break;
            case '-20339':
                $keterangan = 'XML SCHEMA name IS NOT IN THE CORRECT STATE TO PERFORM OPERATION operation';
                break;
            case '-20340':
                $keterangan = 'XML SCHEMA xmlschema-name INCLUDES AT LEAST ONE XML SCHEMA DOCUMENT IN NAMESPACE namespace THAT IS NOT CONNECTED TO THE OTHER XML SCHEMA DOCUMENTS';
                break;
            case '-20345':
                $keterangan = 'THE XML VALUE IS NOT A WELL-FORMED DOCUMENT WITH A SINGLE ROOT ELEMENT';
                break;
            case '-20353':
                $keterangan = 'AN OPERATION INVOLVING COMPARISON CANNOT USE OPERAND name DEFINED AS DATA TYPE type-name';
                break;
            case '-20354':
                $keterangan = 'INVALID SPECIFICATION OF A ROW CHANGE TIMESTAMP COLUMN FOR TABLE table-name';
                break;
            case '-20355':
                $keterangan = 'THE STATEMENT COULD NOT BE PROCESSED BECAUSE ONE OR MORE IMPLICITLY CREATED OBJECTS ARE INVOLVED reason-code';
                break;
            case '-20356':
                $keterangan = 'THE TABLE WITH DBID = dbid AND OBID = obid CANNOT BE TRUNCATED BECAUSE DELETE TRIGGERS EXIST FOR THE TABLE, OR THE TABLE IS THE PARENT TABLE IN A REFERENTIAL CONSTRAINT';
                break;
            case '-20361':
                $keterangan = 'AUTHORIZATION ID authorization-name IS NOT DEFINED FOR THE TRUSTED CONTEXT context-name';
                break;
            case '-20362':
                $keterangan = 'ATTRIBUTE attribute-name WITH VALUE value CANNOT BE DROPPED BECAUSE IT IS NOT PART OF THE DEFINITION OF TRUSTED CONTEXT context-name';
                break;
            case '-20363':
                $keterangan = 'ATTRIBUTE attribute-name WITH VALUE value IS NOT A UNIQUE SPECIFICATION FOR TRUSTED CONTEXT context-name';
                break;
            case '-20365':
                $keterangan = 'A SIGNALING NAN WAS ENCOUNTERED, OR AN EXCEPTION OCCURRED IN AN ARITHMETIC OPERATION OR FUNCTION INVOLVING A DECFLOAT';
                break;
            case '-20366':
                $keterangan = 'TABLE WITH DBID=database-id AND OBID=object-id CANNOT BE TRUNCATED BECAUSE UNCOMMITTED UPDATES EXIST ON THE TABLE WITH IMMEDIATE OPTION SPECIFIED IN THE STATEMENT';
                break;
            case '-20369':
                $keterangan = 'AN ALTER TRUSTED CONTEXT STATEMENT FOR context-name ATTEMPTED TO REMOVE THE LAST CONNECTION TRUST ATTRIBUTE ASSOCIATED WITH THE TRUSTED CONTEXT';
                break;
            case '-20372':
                $keterangan = 'THE SYSTEM AUTHID CLAUSE OF A CREATE OR ALTER TRUSTED CONTEXT STATEMENT FOR context-name SPECIFIED authorization-name, BUT ANOTHER TRUSTED CONTEXT IS ALREADY DEFINED FOR THAT AUTHORIZATION ID.';
                break;
            case '-20373':
                $keterangan = 'A CREATE OR ALTER TRUSTED CONTEXT STATEMENT SPECIFIED authorization-name MORE THAN ONCE OR THE TRUSTED CONTEXT IS ALREADY DEFINED TO BE USED BY THIS AUTHORIZATION ID, PROFILE NAME, OR PUBLIC.';
                break;
            case '-20374':
                $keterangan = 'AN ALTER TRUSTED CONTEXT STATEMENT FOR context-name SPECIFIED authorization-name BUT THE TRUSTED CONTEXT IS NOT CURRENTLY DEFINED TO BE USED BY THIS AUTHORIZATION ID, PROFILE NAME, OR PUBLIC';
                break;
            case '-20377':
                $keterangan = 'AN ILLEGAL XML CHARACTER hex-char WAS FOUND IN AN SQL/XML EXPRESSION OR FUNCTION ARGUMENT THAT BEGINS WITH STRING start-string';
                break;
            case '-20380':
                $keterangan = 'ALTER INDEX WITH REGENERATE OPTION FOR index-name FAILED. INFORMATION RETURNED: SQLCODE sqlcode, SQLSTATE sqlstate, MESSAGE TOKENS token-list';
                break;
            case '-20381':
                $keterangan = 'ALTER INDEX WITH REGENERATE OPTION IS NOT VALID FOR index-name';
                break;
            case '-20382':
                $keterangan = 'CONTEXT ITEM CANNOT BE A SEQUENCE WITH MORE THAN ONE ITEM';
                break;
            case '-20385':
                $keterangan = 'THE STATEMENT CANNOT BE PROCESSED BECAUSE THERE ARE PENDING DEFINITION CHANGES FOR OBJECT object-name OF TYPE object- type (REASON reason-code)';
                break;
            case '-20398':
                $keterangan = 'ERROR ENCOUNTERED DURING XML PARSING AT LOCATION n text';
                break;
            case '-20399':
                $keterangan = 'ERROR ENCOUNTERED DURING XML VALIDATION: LOCATION n; TEXT: text; XSRID schema-ID';
                break;
            case '-20400':
                $keterangan = 'XML SCHEMA ERROR n text';
                break;
            case '-20409':
                $keterangan = 'AN XML DOCUMENT OR CONSTRUCTED XML VALUE CONTAINS A COMBINATION OF XML NODES THAT CAUSES AN INTERNAL IDENTIFIER LIMIT TO BE EXCEEDED';
                break;
            case '-20410':
                $keterangan = 'THE NUMBER OF CHILDREN NODES OF AN XML NODE IN AN XML VALUE HAS EXCEEDED THE LIMIT NUMBER OF CHILDREN NODES';
                break;
            case '-20411':
                $keterangan = 'A FETCH CURRENT CONTINUE OPERATION WAS REQUESTED FOR cursor-name BUT THERE IS NO PRESERVED, TRUNCATED DATA TO RETURN';
                break;
            case '-20412':
                $keterangan = 'SERIALIZATION OF AN XML VALUE RESULTED IN CHARACTERS THAT COULD NOT BE REPRESENTED IN THE TARGET ENCODING';
                break;
            case '-20422':
                $keterangan = 'A CREATE TABLE, DECLARE GLOBAL TEMPORARY TABLE, or ALTER TABLE STATEMENT FOR table-name WOULD RESULT IN A TABLE WITH ALL THE COLUMNS DEFINED AS HIDDEN';
                break;
            case '-20423':
                $keterangan = 'ERROR OCCURRED DURING TEXT SEARCH PROCESSING (server, index-name, text)';
                break;
            case '-20424':
                $keterangan = 'TEXT SEARCH SUPPORT IS NOT AVAILABLE reason-code';
                break;
            case '-20425':
                $keterangan = 'column-name (IN table-name) WAS SPECIFIED AS AN ARGUMENT TO A TEXT SEARCH FUNCTION, BUT A TEXT INDEX DOES NOT EXIST FOR THE COLUMN';
                break;
            case '-20426':
                $keterangan = 'CONFLICTING TEXT SEARCH ADMINISTRATION STORED PROCEDURE RUNNING ON THE SAME INDEX';
                break;
            case '-20427':
                $keterangan = 'ERROR OCCURRED DURING TEXT SEARCH ADMINISTRATION STORED PROCEDURE error';
                break;
            case '-20428':
                $keterangan = 'URI SPECIFIED IN THE XMLSCHEMA CLAUSE IS AN EMPTY STRING.';
                break;
            case '-20430':
                $keterangan = 'GLOBAL VARIABLE variable-name CANNOT BE SET IN THIS CONTEXT.';
                break;
            case '-20433':
                $keterangan = 'AN UNTYPED EXPRESSION WAS SPECIFIED, BUT AN ASSUMED DATA TYPE CANNOT BE DETERMINED FROM ITS USE';
                break;
            case '-20434':
                $keterangan = 'AN UPDATE OPERATION HAS SET ALL OF ITS TARGET COLUMNS TO UNASSIGNED';
                break;
            case '-20435':
                $keterangan = 'THE SELECT CLAUSE INCLUDES MULTIPLE INVOCATIONS OF THE ARRAY_AGG FUNCTION AND ALL INVOCATIONS DO NOT SPECIFY THE SAME SORT KEYS.';
                break;
            case '-20436':
                $keterangan = 'THE DATA TYPE SPECIFIED FOR AN ARRAY TYPE IS NOT VALID.';
                break;
            case '-20437':
                $keterangan = 'AN ARRAY INDEX CANNOT BE APPLIED TO AN OBJECT THAT IS NOT AN ARRAY.';
                break;
            case '-20438':
                $keterangan = 'THE DATA TYPE OF THE EXPRESSION FOR AN ARRAY INDEX VALUE IS NOT CASTABLE TO THE DATA TYPE OF THE ARRAY INDEX.';
                break;
            case '-20439':
                $keterangan = 'AN ARRAY INDEX WITH VALUE value IS NULL, OUT OF RANGE OR DOES NOT EXIST.';
                break;
            case '-20440':
                $keterangan = 'THE ARRAY VALUE WITH CARDINALITY cardinality HAS TOO MANY ELEMENTS FOR THE REQUESTED OPERATION. THE MAXIMUM NUMBER OF ELEMENTS ALLOWED FOR THE REQUESTED OPERATION IS value.';
                break;
            case '-20441':
                $keterangan = 'type-name TYPE IS NOT VALID WHERE SPECIFIED. REASON CODE reason-code.';
                break;
            case '-20442':
                $keterangan = 'THERE IS NOT ENOUGH STORAGE TO REPRESENT THE ARRAY VALUE.';
                break;
            case '-20444':
                $keterangan = 'AN ERROR OCCURRED IN A KEY-EXPRESSION EVALUATION IN index-name INFORMATION RETURNED: SQLCODE: sqlcode, SQLSTATE: sqlstate, MESSAGE TOKEN token-list AND RID X rid';
                break;
            case '-20447':
                $keterangan = 'FORMAT STRING format-string IS NOT VALID FOR THE function-name FUNCTION';
                break;
            case '-20448':
                $keterangan = 'string-expression CANNOT BE INTERPRETED USING FORMAT STRING format-string FOR THE TIMESTAMP_FORMAT FUNCTION.';
                break;
            case '-20457':
                $keterangan = 'THE PROCEDURE procedure-name HAS ENCOUNTERED AN UNSUPPORTED VERSION, version, FOR PARAMETER number';
                break;
            case '-20465':
                $keterangan = 'THE BINARY XML VALUE IS INCOMPLETE OR CONTAINS UNRECOGNIZED DATA AT LOCATION position WITH THE HEX DATA text';
                break;
            case '-20469':
                $keterangan = 'ROW OR COLUMN ACCESS CONTROL CANNOT BE ACTIVATED FOR TABLE table-name FOR REASON reason-code. object-type object-name IS NOT IN A VALID STATE FOR ACTIVATING ACCESS CONTROL FOR THIS TABLE';
                break;
            case '-20470':
                $keterangan = 'object-type1 object-name1 MUST BE DEFINED AS SECURE BECAUSE object-type2 object-name2 IS DEPENDENT ON IT.';
                break;
            case '-20471':
                $keterangan = 'THE INSERT OR UPDATE IS NOT ALLOWED BECAUSE A RESULTING ROW DOES NOT SATISFY ROW PERMISSIONS.';
                break;
            case '-20472':
                $keterangan = 'PERMISSION OR MASK object-name CANNOT BE ALTERED AS SPECIFIED. REASON CODE reason-code.';
                break;
            case '-20473':
                $keterangan = 'THE INPUT ARGUMENT OF FUNCTION function-name THAT IS DEFINED WITH THE NOT-SECURED OPTION MUST NOT REFERENCE COLUMN column-name FOR WHICH A COLUMN MASK IS ENABLED AND THE COLUMN ACCESS CONTROL IS ACTIVATED FOR THE TABLE';
                break;
            case '-20474':
                $keterangan = 'PERMISSION OR MASK CANNOT BE CREATED FOR THE object-name OBJECT OF THE object-type TYPE. REASON CODE reason-code.';
                break;
            case '-20475':
                $keterangan = 'A COLUMN MASK IS ALREADY DEFINED FOR THE COLUMN column-name IN TABLE table-name (EXISTING MASK NAME mask-name)';
                break;
            case '-20476':
                $keterangan = 'THE function-name FUNCTION WAS INVOKED WITH AN INVALID FORMAT STRING format-string.';
                break;
            case '-20477':
                $keterangan = 'THE function-name FUNCTION IS NOT ABLE TO USE FORMAT STRING format-string TO INTERPRET THE ARGUMENT string-expression.';
                break;
            case '-20478':
                $keterangan = 'THE STATEMENT CANNOT BE PROCESSED BECAUSE COLUMN MASK mask-name (DEFINED FOR COLUMN column-name) EXISTS AND THE COLUMN MASK CANNOT BE APPLIED OR THE DEFINITION OF THE MASK CONFLICTS WITH THE REQUESTED STATEMENT. REASON CODE reason-code.';
                break;
            case '-20479':
                $keterangan = 'THE SOURCE TABLE table-name CANNOT BE ALTERED AS SPECIFIED BECAUSE THE TABLE IS INVOLVED IN ROW OR COLUMN ACCESS CONTROLS. REASON CODE reason-code.';
                break;
            case '-20487':
                $keterangan = 'HASH ORGANIZATION CLAUSE IS NOT VALID FOR table-name';
                break;
            case '-20488':
                $keterangan = 'SPECIFIED HASH SPACE IS TOO LARGE FOR THE IMPLICITLY CREATED TABLE SPACE. REASON reason-code. (PARTITION partition-number)';
                break;
            case '-20490':
                $keterangan = 'A VERSIONING CLAUSE WAS SPECIFIED FOR TABLE table-name, BUT THE TABLE CANNOT BE USED AS A SYSTEM PERIOD TEMPORAL TABLE. REASON CODE = reason-code.';
                break;
            case '-20491':
                $keterangan = 'INVALID SPECIFICATION OF PERIOD period-name. REASON CODE = reason-code.';
                break;
            case '-20493':
                $keterangan = 'A TIMESTAMP WITHOUT TIME ZONE VALUE CANNOT BE ASSIGNED TO A TIMESTAMP WITH TIME ZONE TARGET';
                break;
            case '-20494':
                $keterangan = 'A PUBLIC ALIAS NAME, name, CAN ONLY BE QUALIFIED WITH SYSPUBLIC AND NOT THE SCHEMA NAME schema-name.';
                break;
            case '-20497':
                $keterangan = 'A STRING REPRESENTATION OF A DATETIME VALUE THAT CONTAINS A TIME ZONE CANNOT BE IMPLICITLY OR EXPLICITLY CAST TO A TARGET DEFINED AS DATETIME WITHOUT TIME ZONE';
                break;
            case '-20505':
                $keterangan = 'THE WITH ORDINALITY CLAUSE IS NOT VALID WITH UNNEST OF AN ASSOCIATIVE ARRAY.';
                break;
            case '-20517':
                $keterangan = 'XMLMODIFY ATTEMPTED TO UPDATE A COLUMN WHICH WAS NOT SPECIFIED IN THE UPDATE SET CLAUSE';
                break;
            case '-20522':
                $keterangan = 'INVALID SPECIFICATION OF WITHOUT OVERLAPS OR PERIOD CLAUSE. REASON CODE reason-code.';
                break;
            case '-20523':
                $keterangan = 'TABLE table-name WAS SPECIFIED AS A HISTORY TABLE, BUT THE TABLE DEFINITION IS NOT VALID FOR A HISTORY TABLE. REASON CODE = reason-code.';
                break;
            case '-20524':
                $keterangan = 'INVALID PERIOD SPECIFICATION OR PERIOD CLAUSE FOR PERIOD period-name. REASON CODE = reason-code.';
                break;
            case '-20525':
                $keterangan = 'THE REQUESTED ACTION IS NOT VALID FOR TABLE table-name BECAUSE THE TABLE IS THE WRONG TYPE OF TABLE. REASON CODE = reason-code';
                break;
            case '-20527':
                $keterangan = 'period-name IS NOT A PERIOD IN TABLE table-name';
                break;
            case '-20528':
                $keterangan = 'THE TARGET OF THE DATA CHANGE OPERATION IS A TABLE table-name, WHICH INCLUDES A PERIOD period-name. A ROW THAT THIS DATA CHANGE OPERATION ATTEMPTED TO MODIFY WAS ALSO MODIFIED BY ANOTHER TRANSACTION.';
                break;
            case '-20531':
                $keterangan = 'THE VERSION NUMBER actual-version SPECIFIED IN A BINARY XML VALUE IS NOT SUPPORTED. THE HIGHEST SUPPORTED VERSION IS supported-version.';
                break;
            case '-20535':
                $keterangan = 'THE DATA CHANGE OPERATION operation IS NOT SUPPORTED FOR THE TARGET OBJECT object-name BECAUSE OF AN IMPLICIT OR EXPLICIT SYSTEM PERIOD SPECIFICATION INVOLVING period-name. REASON CODE: reason-code.';
                break;
            case '-20550':
                $keterangan = 'AN ARGUMENT, OR COMBINATION OF ARGUMENTS, SPECIFIED FOR THE operator-name OPERATOR ARE NOT VALID.';
                break;
            case '-20553':
                $keterangan = 'AN ENABLE ARCHIVE CLAUSE WAS SPECIFIED FOR TABLE table-name, BUT THE TABLE CANNOT BE USED AS AN ARCHIVE-ENABLED TABLE. REASON CODE = reason-code.';
                break;
            case '-20554':
                $keterangan = 'TABLE table-name WAS SPECIFIED AS AN ARCHIVE TABLE, BUT THE TABLE DEFINITION IS NOT VALID FOR AN ARCHIVE TABLE. REASON CODE = reason-code.';
                break;
            case '-20555':
                $keterangan = 'AN ARCHIVE-ENABLED TABLE IS NOT ALLOWED IN THE SPECIFIED CONTEXT. REASON CODE reason-code.';
                break;
            case '-20556':
                $keterangan = 'THE OPERATION FAILED BECAUSE MULTIPLE RESULT VALUES CANNOT BE RETURNED FROM A SCALAR FUNCTION function-name.';
                break;
            case '-30000':
                $keterangan = 'EXECUTION FAILED DUE TO A DISTRIBUTION PROTOCOL ERROR THAT WILL NOT AFFECT THE SUCCESSFUL EXECUTION OF SUBSEQUENT COMMANDS OR SQL STATEMENTS: REASON reason-code (sub-code)';
                break;
            case '-30002':
                $keterangan = 'THE SQL STATEMENT CANNOT BE EXECUTED DUE TO A PRIOR CONDITION IN A CHAIN OF STATEMENTS';
                break;
            case '-30005':
                $keterangan = 'EXECUTION FAILED BECAUSE FUNCTION NOT SUPPORTED BY THE SERVER: LOCATION location-name PRODUCT ID product-identifier REASON reason-code (sub-code)';
                break;
            case '-30020':
                $keterangan = 'EXECUTION FAILED DUE TO A DISTRIBUTION PROTOCOL ERROR THAT CAUSED DEALLOCATION OF THE CONVERSATION: REASON reason-code (sub-code)';
                break;
            case '-30021':
                $keterangan = 'EXECUTION FAILED DUE TO A DISTRIBUTION PROTOCOL ERROR THAT WILL AFFECT THE SUCCESSFUL EXECUTION OF SUBSEQUENT COMMANDS OR SQL STATEMENTS: MANAGER manager AT LEVEL level NOT SUPPORTED ERROR';
                break;
            case '-30025':
                $keterangan = 'EXECUTION FAILED BECAUSE FUNCTION IS NOT SUPPORTED BY THE SERVER WHICH CAUSED TERMINATION OF THE CONNECTION: LOCATION location PRODUCT ID product-identifier REASON reason-code (sub-code)';
                break;
            case '-30030':
                $keterangan = 'COMMIT REQUEST WAS UNSUCCESSFUL, A DISTRIBUTION PROTOCOL VIOLATION HAS BEEN DETECTED, THE CONVERSATION HAS BEEN DEALLOCATED. ORIGINAL SQLCODE=original-sqlcode AND ORIGINAL SQLSTATE=original-sqlstate';
                break;
            case '-30040':
                $keterangan = 'EXECUTION FAILED DUE TO UNAVAILABLE RESOURCES THAT WILL NOT AFFECT THE SUCCESSFUL EXECUTION OF SUBSEQUENT COMMANDS OR SQL STATEMENTS. REASON reason-code TYPE OF RESOURCE resource-type RESOURCE NAME resource-name PRODUCT ID product-identifier RDBNAME rdbname';
                break;
            case '-30041':
                $keterangan = 'EXECUTION FAILED DUE TO UNAVAILABLE RESOURCES THAT WILL AFFECT THE SUCCESSFUL EXECUTION OF SUBSEQUENT COMMANDS AND SQL STATEMENTS. REASON reason-code TYPE OF RESOURCE resource-type RESOURCE NAME resource-name PRODUCT ID product-identifier RDBNAME rdbname';
                break;
            case '-30045':
                $keterangan = 'EXECUTION FAILED BECAUSE THE DEFINITION OF OBJECT object-name OF TYPE object-type BEING ACCESSED AT server-name-1 DIFFERS FROM THE DEFINITION OF THE OBJECT AT server-name-2';
                break;
            case '-30047':
                $keterangan = 'STATEMENT FAILED BECAUSE OBJECT OF TYPE object-type CANNOT BE ACCESSED USING DIFFERENT DISTRIBUTED PROTOCOLS ON A CONNECTION FROM server-name-1 TO server-name-2';
                break;
            case '-30050':
                $keterangan = 'command-or-SQL-statement-type COMMAND OR SQL STATEMENT INVALID WHILE BIND PROCESS IN PROGRESS';
                break;
            case '-30051':
                $keterangan = 'BIND PROCESS WITH SPECIFIED PACKAGE NAME AND CONSISTENCY TOKEN NOT ACTIVE';
                break;
            case '-30052':
                $keterangan = 'PROGRAM PREPARATION ASSUMPTIONS ARE INCORRECT';
                break;
            case '-30053':
                $keterangan = 'OWNER AUTHORIZATION FAILURE';
                break;
            case '-30060':
                $keterangan = 'RDB AUTHORIZATION FAILURE';
                break;
            case '-30061':
                $keterangan = 'RDB NOT FOUND';
                break;
            case '-30070':
                $keterangan = 'command COMMAND NOT SUPPORTED ERROR';
                break;
            case '-30071':
                $keterangan = 'object-type OBJECT NOT SUPPORTED ERROR';
                break;
            case '-30072':
                $keterangan = 'parameter subcode PARAMETER NOT SUPPORTED ERROR';
                break;
            case '-30073':
                $keterangan = 'parameter subcode PARAMETER VALUE NOT SUPPORTED ERROR';
                break;
            case '-30074':
                $keterangan = 'REPLY MESSAGE WITH codepoint (svrcod) NOT SUPPORTED ERROR';
                break;
            case '-30080':
                $keterangan = 'COMMUNICATION ERROR code (subcode)';
                break;
            case '-30081':
                $keterangan = 'prot COMMUNICATIONS ERROR DETECTED. API=api, LOCATION=loc, FUNCTION=func, ERROR CODES=rc1 rc2 rc3';
                break;
            case '-30082':
                $keterangan = 'CONNECTION FAILED FOR SECURITY REASON reason-code (reason-string)';
                break;
            case '-30090':
                $keterangan = 'REMOTE OPERATION INVALID FOR APPLICATION EXECUTION ENVIRONMENT';
                break;
            case '-30104':
                $keterangan = 'ERROR IN BIND OPTION option-name AND BIND VALUE option-value.';
                break;
            case '-30105':
                $keterangan = 'BIND OPTION option1 IS NOT ALLOWED WITH BIND OPTION option2';
                break;
            case '-30106':
                $keterangan = 'INVALID INPUT DATA DETECTED FOR A MULTIPLE ROW INSERT OPERATION. INSERT PROCESSING IS TERMINATED';
                break;

            default:
                $keterangan = 'Error SQLCODE ' . $error;
        }
        return $keterangan;
    }

    private function pesan_sqlstate($error)
    {
        switch ($error) {
            case '01xxx':
                $keterangan = 'Valid warning SQLSTATEs returned by an SQL routine. Also used for RAISE_ERROR and SIGNAL.';
                break;
            case '01003':
                $keterangan = 'Null values were eliminated from the argument of an aggregate function.';
                break;
            case '01004':
                $keterangan = 'The value of a string was truncated when assigned to another string data type with a shorter length.';
                break;
            case '01005':
                $keterangan = 'Insufficient number of entries in an SQLDA.';
                break;
            case '0100C':
                $keterangan = 'One or more ad hoc result sets were returned from the procedure.';
                break;
            case '0100E':
                $keterangan = 'The procedure returned too many result sets.';
                break;
            case '01011':
                $keterangan = 'The PATH value has been truncated. Array data, right truncation.';
                break;
            case '01503':
                $keterangan = 'The number of result columns is larger than the number of variables provided.';
                break;
            case '01504':
                $keterangan = 'The UPDATE or DELETE statement does not include a WHERE clause.';
                break;
            case '01505':
                $keterangan = 'The statement was not executed because it is unacceptable in this environment.';
                break;
            case '01506':
                $keterangan = 'An adjustment was made to a DATE or TIMESTAMP value to correct an invalid date resulting from an arithmetic operation.';
                break;
            case '01507':
                $keterangan = 'One or more non-zero digits were eliminated from the fractional part of a number used as the operand of a multiply or divide operation.';
                break;
            case '01514':
                $keterangan = 'The tablespace has been placed in the check-pending state.';
                break;
            case '01515':
                $keterangan = 'The null value has been assigned to a variable, because the non-null value of the column is not within the range of the variable.';
                break;
            case '01516':
                $keterangan = 'An inapplicable WITH GRANT OPTION has been ignored.';
                break;
            case '01517':
                $keterangan = 'A character that could not be converted was replaced with a substitute character.';
                break;
            case '01519':
                $keterangan = 'The null value has been assigned to a variable, because a numeric value is out of range.';
                break;
            case '01520':
                $keterangan = 'The null value has been assigned to a variable, because the characters cannot be converted.';
                break;
            case '01521':
                $keterangan = 'A specified server-name is undefined but is not needed until the statement is executed or the alias is used.';
                break;
            case '01522':
                $keterangan = 'The local table or view name used in the CREATE ALIAS statement is undefined.';
                break;
            case '01523':
                $keterangan = 'ALL was interpreted to exclude ALTER, INDEX, REFERENCES, and TRIGGER, because these privileges cannot be granted to a remote user.';
                break;
            case '01524':
                $keterangan = 'The result of an aggregate function does not include the null values that were caused by evaluating the arithmetic expression implied by the column of the view.';
                break;
            case '01525':
                $keterangan = 'The number of INSERT values is not the same as the number of columns.';
                break;
            case '01527':
                $keterangan = 'A SET statement references a special register that does not exist at the AS.';
                break;
            case '01528':
                $keterangan = 'WHERE NOT NULL is ignored, because the index key cannot contain null values.';
                break;
            case '01530':
                $keterangan = 'Definition change may require a corresponding change on the read-only systems.';
                break;
            case '01532':
                $keterangan = 'An undefined object name was detected.';
                break;
            case '01533':
                $keterangan = 'An undefined column name was detected.';
                break;
            case '01537':
                $keterangan = 'An SQL statement cannot be EXPLAINed, because it references a remote object.';
                break;
            case '01538':
                $keterangan = 'The table cannot be subsequently defined as a dependent, because it has the maximum number of columns.';
                break;
            case '01539':
                $keterangan = 'Connection is successful but only SBCS characters should be used.';
                break;
            case '01540':
                $keterangan = 'A limit key has been truncated to 40 bytes.';
                break;
            case '01542':
                $keterangan = 'Authorization ID does not have the privilege to perform the operation as specified.';
                break;
            case '01543':
                $keterangan = 'A duplicate constraint has been ignored.';
                break;
            case '01545':
                $keterangan = 'An unqualified column name has been interpreted as a correlated reference.';
                break;
            case '01546':
                $keterangan = 'A column of the explanation table is improperly defined.';
                break;
            case '01548':
                $keterangan = 'The authorization ID does not have the privilege to perform the specified operation on the identified object.';
                break;
            case '01551':
                $keterangan = 'A table in a partitioned tablespace is not available, because its partitioned index has not been created.';
                break;
            case '01552':
                $keterangan = 'An ambiguous qualified column name was resolved to the first of the duplicate names in the FROM clause.';
                break;
            case '01553':
                $keterangan = 'Isolation level RR conflicts with a tablespace locksize of page.';
                break;
            case '01554':
                $keterangan = 'Decimal multiplication may cause overflow.';
                break;
            case '01558':
                $keterangan = 'A distribution protocol has been violated.';
                break;
            case '01560':
                $keterangan = 'A redundant GRANT has been ignored.';
                break;
            case '01561':
                $keterangan = 'An update to a data capture table was not signaled to the originating subsystem.';
                break;
            case '01565':
                $keterangan = 'The null value has been assigned to a variable, because a miscellaneous data exception occurred; for example, the character value for the CAST, DECIMAL, FLOAT, or INTEGER scalar function is invalid; a floating-point NAN (not a number) or invalid data in a packed decimal field was detected.';
                break;
            case '01566':
                $keterangan = 'The index has been placed in a pending state.';
                break;
            case '01568':
                $keterangan = 'The dynamic SQL statement ends with a semicolon.';
                break;
            case '01590':
                $keterangan = 'Type 2 indexes do not have subpages.';
                break;
            case '01591':
                $keterangan = 'The result of the positioned UPDATE or DELETE may depend on the order of the rows.';
                break;
            case '01594':
                $keterangan = 'Insufficient number of entries in an SQLDA for ALL information (i.e. not enough descriptors to return the distinct name).';
                break;
            case '01596':
                $keterangan = 'Comparison functions were not created for a distinct type based on a long string data type.';
                break;
            case '01597':
                $keterangan = 'Specific and non-specific volume IDs are not allowed in a storage group.';
                break;
            case '01600':
                $keterangan = 'SUBPAGES ignored on alter of catalog index.';
                break;
            case '01602':
                $keterangan = 'Optimization processing encountered a restriction that might have caused it to produce a sub-optimal result.';
                break;
            case '01605':
                $keterangan = 'A recursive common table expression may contain an infinite loop.';
                break;
            case '01608':
                $keterangan = 'An unsupported value has been replaced.';
                break;
            case '01614':
                $keterangan = 'There are fewer locators than the number of result sets.';
                break;
            case '01616':
                $keterangan = 'The estimated CPU cost exceeds the resource limit.';
                break;
            case '01624':
                $keterangan = 'The GBPCACHE specification is ignored because the buffer pool does not allow caching.';
                break;
            case '01625':
                $keterangan = 'The schema name appears more than once in the CURRENT PATH.';
                break;
            case '01628':
                $keterangan = 'The user-specified access path hints are invalid. The access path hints are ignored.';
                break;
            case '01629':
                $keterangan = 'User-specified access path hints were used during access path selection.';
                break;
            case '01640':
                $keterangan = 'ROLLBACK TO SAVEPOINT occurred when there were uncommitted INSERTs or DELETEs that cannot be rolled back.';
                break;
            case '01643':
                $keterangan = 'Assignment to SQLCODE or SQLSTATE variable does not signal a warning or error.';
                break;
            case '01644':
                $keterangan = 'DEFINE NO is not applicable for a lob space or data sets using the VCAT option.';
                break;
            case '01656':
                $keterangan = 'ROLLBACK TO savepoint caused a NOT LOGGED table space to be placed in the LPL.';
                break;
            case '01658':
                $keterangan = 'Binary data is invalid for DECRYPT_CHAR and DECYRYPT_DB.';
                break;
            case '01659':
                $keterangan = 'A non-atomic statement successfully processed all requested rows with one or more warning conditions.';
                break;
            case '01663':
                $keterangan = 'NOT PADDED clause is ignored for indexes created on auxiliary tables.';
                break;
            case '01664':
                $keterangan = 'Option not specified following the ALTER PARTITION CLAUSE.';
                break;
            case '01668':
                $keterangan = 'A rowset FETCH statement returned one or more rows of data, with one or more bind out processing error conditions. Use GET DIAGNOSTICS for more information.';
                break;
            case '01679':
                $keterangan = 'A trusted connection cannot be established for the specified system authorization ID.';
                break;
            case '01680':
                $keterangan = 'The option is not supported in the context in which it was specified.';
                break;
            case '01681':
                $keterangan = 'The trusted context is no longer defined to be used by specific attribute value.';
                break;
            case '01682':
                $keterangan = 'The ability to use the trusted context was removed from some but not all authorization IDs specified in statement.';
                break;
            case '01683':
                $keterangan = 'A SELECT containing a non-ATOMIC data change statement successfully returned some rows, but one or more warnings or errors occurred.';
                break;
            case '0168B':
                $keterangan = 'An operation was partially successful and partially unsuccessful. Use GET DIAGNOSTICS for more information.';
                break;
            case '0168C':
                $keterangan = 'A decimal float operation produced an inexact result.';
                break;
            case '0168D':
                $keterangan = 'A decimal floating point operation was invalid.';
                break;
            case '0168E':
                $keterangan = 'A decimal float operation produced an overflow or underflow.';
                break;
            case '0168F':
                $keterangan = 'A decimal float operation produced division by zero.';
                break;
            case '0168G':
                $keterangan = 'A decimal float operation produced a subnormal number.';
                break;
            case '0168L':
                $keterangan = 'No routine was found with the specified name and compatible arguments.';
                break;
            case '0168T':
                $keterangan = 'WITH ROW CHANGE COLUMNS ALWAYS DISTINCT was specified, but the database manager is unable to return distinct row change columns.';
                break;
            case '0168X':
                $keterangan = 'The combination of target namespace and schema location hint is not unique in the XML schema repository.';
                break;
            case '0168Z':
                $keterangan = 'The statement was successfully prepared, but cannot be executed.';
                break;
            case '01694':
                $keterangan = 'A deprecated feature has been ignored.';
                break;
            case '01695':
                $keterangan = 'Adjustment made to a value for a period as a result of a data change operation.';
                break;
            case '01Hxx':
                $keterangan = 'Valid warning SQLSTATEs returned by a user-defined function, external procedure CALL, or command invocation.';
                break;
            case '02000':
                $keterangan = 'One of the following exceptions occurred: The result of the SELECT INTO statement or the subselect of the INSERT statement was an empty table. The position of the cursor referenced in the FETCH statement was after the last row of the result table.The fetch orientation is invalid.';
                break;
            case '02502':
                $keterangan = 'Delete or update hole detected.';
                break;
            case '02504':
                $keterangan = 'FETCH PRIOR ROWSET returned a partial rowset.';
                break;
            case '07001':
                $keterangan = 'The number of variables is not correct for the number of parameter markers.';
                break;
            case '07002':
                $keterangan = 'The call parameter list or control block is invalid.';
                break;
            case '07003':
                $keterangan = 'The statement identified in the EXECUTE statement is a select-statement, or is not in a prepared state.';
                break;
            case '07005':
                $keterangan = 'The statement name of the cursor identifies a prepared statement that cannot be associated with a cursor.';
                break;
            case '07501':
                $keterangan = 'The option specified on PREPARE is not valid.';
                break;
            case '08001':
                $keterangan = 'The connection was unable to be established to the application server or other server.';
                break;
            case '08002':
                $keterangan = 'The connection already exists.';
                break;
            case '08003':
                $keterangan = 'The connection does not exist.';
                break;
            case '08004':
                $keterangan = 'The application server rejected establishment of the connection.';
                break;
            case '09000':
                $keterangan = 'A triggered SQL statement failed.';
                break;
            case '0A001':
                $keterangan = 'The CONNECT statement is invalid, because the process is not in the connectable state.';
                break;
            case '0F001':
                $keterangan = 'The locator value does not currently represent any value.';
                break;
            case '0K000':
                $keterangan = 'A RESIGNAL was issued but a handler is not active.';
                break;
            case '0N002':
                $keterangan = 'A character cannot be mapped to a valid XML character.';
                break;
            case '10501':
                $keterangan = 'An XQuery expression is missing the assignment of a static or dynamic context component.';
                break;
            case '10502':
                $keterangan = 'An error was encountered in the prolog of an XQuery expression.';
                break;
            case '10503':
                $keterangan = 'A duplicate name was defined in an XQuery or XPath expression.';
                break;
            case '10504':
                $keterangan = 'An XQuery namespace declaration specified an invalid URI.';
                break;
            case '10505':
                $keterangan = 'A character, token or clause is missing or invalid in an XQuery expression.';
                break;
            case '10506':
                $keterangan = 'An XQuery expression references a name that is not defined.';
                break;
            case '10507':
                $keterangan = 'A type error was encountered processing an XPath or XQuery expression.';
                break;
            case '10509':
                $keterangan = 'An unsupported XQuery language feature is specified.';
                break;
            case '10601':
                $keterangan = 'An arithmetic error was encountered processing an XQuery function or operator.';
                break;
            case '10602':
                $keterangan = 'A casting error was encountered processing an XQuery function or operator.';
                break;
            case '10606':
                $keterangan = 'There is no context item for processing an XQuery function or operator.';
                break;
            case '10608':
                $keterangan = 'An error was encountered in the argument of an XQuery function or operator.';
                break;
            case '10609':
                $keterangan = 'A regular expression error was encountered processing an XQuery function or operator.';
                break;
            case '20000':
                $keterangan = 'The case was not found for the CASE statement.';
                break;
            case '21000':
                $keterangan = 'The result of a SELECT INTO, scalar fullselect, or subquery of a basic predicate is more than one value.';
                break;
            case '21501':
                $keterangan = 'A multiple-row INSERT into a self-referencing table is invalid.';
                break;
            case '21502':
                $keterangan = 'A multiple-row UPDATE of a primary key is invalid.';
                break;
            case '22001':
                $keterangan = 'Character data, right truncation occurred; for example, an update or insert value is a string that is too long for the column, or a datetime value cannot be assigned to a variable, because it is too small.';
                break;
            case '22002':
                $keterangan = 'A null value, or the absence of an indicator parameter was detected; for example, the null value cannot be assigned to a variable, because no indicator variable is specified.';
                break;
            case '22003':
                $keterangan = 'A numeric value is out of range.';
                break;
            case '22004':
                $keterangan = 'A null value is not allowed.';
                break;
            case '22007':
                $keterangan = 'An invalid datetime format was detected; that is, an invalid string representation or value was specified.';
                break;
            case '22008':
                $keterangan = 'Datetime field overflow occurred; for example, an arithmetic operation on a date or timestamp has a result that is not within the valid range of dates.';
                break;
            case '2200L':
                $keterangan = 'The XML value is not a well-formed document with a single root element.';
                break;
            case '2200M':
                $keterangan = 'The XML document is not valid.';
                break;
            case '2200S':
                $keterangan = 'The XML comment is not valid.';
                break;
            case '2200T':
                $keterangan = 'The XML processing instruction is not valid.';
                break;
            case '2200V':
                $keterangan = 'A context item is an XML sequence of more than one item.';
                break;
            case '2200W':
                $keterangan = 'An XML value contained data that could not be serialized.';
                break;
            case '22011':
                $keterangan = 'A substring error occurred; for example, an argument of SUBSTR or SUBSTRING is out of range.';
                break;
            case '22012':
                $keterangan = 'Division by zero is invalid.';
                break;
            case '22018':
                $keterangan = 'The character value for a CAST specification or cast scalar function is invalid.';
                break;
            case '22019':
                $keterangan = 'The LIKE predicate has an invalid escape character.';
                break;
            case '2201R':
                $keterangan = 'The XML document is not valid.';
                break;
            case '22021':
                $keterangan = 'A character is not in the coded character set or the conversion is not supported.';
                break;
            case '22023':
                $keterangan = 'A parameter or variable value is invalid.';
                break;
            case '22024':
                $keterangan = 'A NUL-terminated input host variable or parameter did not contain a NUL.';
                break;
            case '22025':
                $keterangan = 'The LIKE predicate string pattern contains an invalid occurrence of an escape character.';
                break;
            case '22501':
                $keterangan = 'The length control field of a variable length string is negative or greater than the maximum.';
                break;
            case '22502':
                $keterangan = 'Signalling NaN was encountered.';
                break;
            case '22503':
                $keterangan = 'The string representation of a name is invalid.';
                break;
            case '22504':
                $keterangan = 'A mixed data value is invalid.';
                break;
            case '22505':
                $keterangan = 'The local date or time length has been increased, but the executing program relies on the old length.';
                break;
            case '22506':
                $keterangan = 'A reference to a datetime special register is invalid, because the clock is malfunctioning or the operating system time zone parameter is out of range.';
                break;
            case '22508':
                $keterangan = 'CURRENT PACKAGESET is blank.';
                break;
            case '22511':
                $keterangan = 'ADT length exceeds maximum column length. The value for a ROWID or reference column is not valid.';
                break;
            case '22512':
                $keterangan = 'A variable in a predicate is invalid, because its indicator variable is negative.';
                break;
            case '22522':
                $keterangan = 'A CCSID value is not valid at all, not valid for the data type or subtype, or not valid for the encoding scheme.';
                break;
            case '22525':
                $keterangan = 'Partitioning key value is not valid.';
                break;
            case '22527':
                $keterangan = 'Invalid input data detected for a multiple-row insert.';
                break;
            case '22528':
                $keterangan = 'Binary data is invalid for DECRYPT_CHAR and DECYRYPT_DB.';
                break;
            case '22529':
                $keterangan = 'A non-atomic statement successfully completed for at least one row, but one or more errors occurred.';
                break;
            case '22530':
                $keterangan = 'A non-atomic statement attempted to process multiple rows of data, but no row was inserted and one or more errors occurred.';
                break;
            case '22531':
                $keterangan = 'The argument of a built-in or system provided routine resulted in an error.';
                break;
            case '22532':
                $keterangan = 'An XSROBJECT is not found in the XML schema repository.';
                break;
            case '22533':
                $keterangan = 'A unique XSROBJECT could not be found in the XML schema repository.';
                break;
            case '22534':
                $keterangan = 'An XML schema document is not connected to the other XML schema documents using an include or redefine.';
                break;
            case '22537':
                $keterangan = 'A rowset FETCH statement returned one or more rows of data, with one or more non-terminating error conditions. Use GET DIAGNOSTICS for more information.';
                break;
            case '22541':
                $keterangan = 'The binary XML value contains unrecognized data.';
                break;
            case '22542':
                $keterangan = 'The INSERT or UPDATE in not allowed because a resulting row does not satisfy row permissions.';
                break;
            case '22544':
                $keterangan = 'The binary XML value contains a version that is not supported.';
                break;
            case '22546':
                $keterangan = 'The value for a routine argument is not valid.';
                break;
            case '22547':
                $keterangan = 'Multiple result values cannot be returned from the scalar function. ';
                break;
            case '225DE':
                $keterangan = 'An XML schema cannot be enabled for decomposition.';
                break;
            case '23502':
                $keterangan = 'An insert or update value is null, but the column cannot contain null values.';
                break;
            case '23503':
                $keterangan = 'The insert or update value of a foreign key is invalid.';
                break;
            case '23504':
                $keterangan = 'The update or delete of a parent key is prevented by a NO ACTION update or delete rule.';
                break;
            case '23505':
                $keterangan = 'A violation of the constraint imposed by a unique index or a unique constraint occurred.';
                break;
            case '23506':
                $keterangan = 'A violation of a constraint imposed by an edit or validation procedure occurred.';
                break;
            case '23507':
                $keterangan = 'A violation of a constraint imposed by a field procedure occurred.';
                break;
            case '23508':
                $keterangan = 'A violation of a constraint imposed by the DDL Registration Facility occurred.';
                break;
            case '23509':
                $keterangan = 'The owner of the package has constrained its use to environments which do not include that of the application process.';
                break;
            case '23510':
                $keterangan = 'A violation of a constraint on the use of the command imposed by the RLST table occurred.';
                break;
            case '23511':
                $keterangan = 'A parent row cannot be deleted, because the check constraint restricts the deletion.';
                break;
            case '23512':
                $keterangan = 'The check constraint cannot be added, because the table contains rows that do not satisfy the constraint definition.';
                break;
            case '23513':
                $keterangan = 'The resulting row of the INSERT or UPDATE does not conform to the check constraint definition.';
                break;
            case '23515':
                $keterangan = 'The unique index could not be created or unique constraint added, because the table contains duplicate values of the specified key.';
                break;
            case '23522':
                $keterangan = 'The range of values for the identity column or sequence is exhausted.';
                break;
            case '23523':
                $keterangan = 'An invalid value has been provided for the SECURITY LABEL column.';
                break;
            case '23525':
                $keterangan = 'A violation of a constraint imposed by an XML values index occurred.';
                break;
            case '23526':
                $keterangan = 'An XML values index could not be created because the table data contains values that violate a constraint imposed by the index.';
                break;
            case '24501':
                $keterangan = 'The identified cursor is not open.';
                break;
            case '24502':
                $keterangan = 'The cursor identified in an OPEN statement is already open.';
                break;
            case '24504':
                $keterangan = 'The cursor identified in the UPDATE, DELETE, SET, or GET statement is not positioned on a row.';
                break;
            case '24506':
                $keterangan = 'The statement identified in the PREPARE is the statement of an open cursor.';
                break;
            case '24510':
                $keterangan = 'An UPDATE or DELETE operation was attempted against a delete or update hole';
                break;
            case '24512':
                $keterangan = 'The result table does not agree with the base table.';
                break;
            case '24513':
                $keterangan = 'FETCH NEXT, PRIOR, CURRENT, or RELATIVE is not allowed, because the cursor position is not known.';
                break;
            case '24516':
                $keterangan = 'A cursor has already been assigned to a result set.';
                break;
            case '24517':
                $keterangan = 'A cursor was left open by an external function or method.';
                break;
            case '24518':
                $keterangan = 'A cursor is not defined to handle row sets, but a rowset was requested.';
                break;
            case '24519':
                $keterangan = 'A hole was detected on a multiple-row FETCH statement, but indicator variables were not provided.';
                break;
            case '24520':
                $keterangan = 'The cursor identified in the UPDATE or DELETE statement is not positioned on a rowset.';
                break;
            case '24521':
                $keterangan = 'A positioned DELETE or UPDATE statement specified a row of a rowset, but the row is not contained within the current rowset.';
                break;
            case '24522':
                $keterangan = 'The fetch orientation is inconsistent with the definition of the cursor and whether rowsets are supported for the cursor.';
                break;
            case '24524':
                $keterangan = 'A FETCH CURRENT CONTINUE was requested, but there is no truncated LOB or XML data to return.';
                break;
            case '25000':
                $keterangan = 'An insert, update, or delete operation or procedure call is invalid in the context where it is specified.';
                break;
            case '26501':
                $keterangan = 'The statement identified does not exist.';
                break;
            case '2D521':
                $keterangan = 'SQL COMMIT or ROLLBACK are invalid in the current operating environment.';
                break;
            case '2D528':
                $keterangan = 'Dynamic COMMIT or COMMIT ON RETURN procedure is invalid for the application execution environment';
                break;
            case '2D529':
                $keterangan = 'Dynamic ROLLBACK is invalid for the application execution environment.';
                break;
            case '34000':
                $keterangan = 'Cursor name is invalid.';
                break;
            case '35000':
                $keterangan = 'Condition number is invalid.';
                break;
            case '36001':
                $keterangan = 'A SENSITIVE cursor cannot be defined for the specified select-statement.';
                break;
            case '38xxx':
                $keterangan = 'Valid error SQLSTATEs returned by an external routine or trigger.';
                break;
            case '38000':
                $keterangan = 'A Java routine has exited with an exception.';
                break;
            case '38001':
                $keterangan = 'The external routine is not allowed to execute SQL statements.';
                break;
            case '38002':
                $keterangan = 'The external routine attempted to modify data, but the routine was not defined as MODIFIES SQL DATA.';
                break;
            case '38003':
                $keterangan = 'The statement is not allowed in a routine.';
                break;
            case '38004':
                $keterangan = 'The external routine attempted to read data, but the routine was not defined as READS SQL DATA.';
                break;
            case '38503':
                $keterangan = 'A user-defined function or procedure has abnormally terminated (abend).';
                break;
            case '38504':
                $keterangan = 'A routine has been interrupted by the user.';
                break;
            case '38505':
                $keterangan = 'An SQL statement is not allowed in a routine on a FINAL CALL.';
                break;
            case '38H01':
                $keterangan = 'An MQSeries® function failed to initialize.';
                break;
            case '38H02':
                $keterangan = 'MQSeries Application Messaging Interface failed to terminate the session.';
                break;
            case '38H03':
                $keterangan = 'MQSeries Application Messaging Interface failed to properly process a message.';
                break;
            case '38H04':
                $keterangan = 'MQSeries Application Messaging Interface failed in sending a message.';
                break;
            case '38H05':
                $keterangan = 'MQSeries Application Messaging Interface failed to read/receive a message.';
                break;
            case '38H06':
                $keterangan = 'An MQSeries Application Messaging Interface message was truncated.';
                break;
            case '38H10':
                $keterangan = 'Error occurred during text search processing.';
                break;
            case '38H11':
                $keterangan = 'Text search support is not available.';
                break;
            case '38H12':
                $keterangan = 'Text search is not allowed on a column because a text search index does not exist on the column.';
                break;
            case '38H13':
                $keterangan = 'A conflicting search administration procedure or command is running on the same text search index.';
                break;
            case '38H14':
                $keterangan = 'Text search administration procedure error.';
                break;
            case '39004':
                $keterangan = 'A null value is not allowed for an IN or INOUT argument when using PARAMETER STYLE GENERAL or an argument that is a Java primitive type.';
                break;
            case '39501':
                $keterangan = 'An output argument value returned from a function or a procedure was too long.';
                break;
            case '3B001':
                $keterangan = 'The savepoint is not valid.';
                break;
            case '3B501':
                $keterangan = 'A duplicate savepoint name was detected.';
                break;
            case '3B502':
                $keterangan = 'A RELEASE or ROLLBACK TO SAVEPOINT was specified, but a savepoint does not exist.';
                break;
            case '3B503':
                $keterangan = 'A SAVEPOINT, RELEASE SAVEPOINT, or ROLLBACK TO SAVEPOINT is not allowed in a trigger, function, or global transaction.';
                break;
            case '3C000':
                $keterangan = 'The cursor name is ambiguous.';
                break;
            case '40001':
                $keterangan = 'Deadlock or timeout with automatic rollback occurred.';
                break;
            case '42501':
                $keterangan = 'The authorization ID does not have the privilege to perform the specified operation on the identified object.';
                break;
            case '42502':
                $keterangan = 'The authorization ID does not have the privilege to perform the operation as specified.';
                break;
            case '42503':
                $keterangan = 'The specified authorization ID or one of the authorization IDs of the application process is not allowed.';
                break;
            case '42504':
                $keterangan = 'A specified privilege, security label, or exemption cannot be revoked from a specified authorization-name.';
                break;
            case '42505':
                $keterangan = 'Connection authorization failure occurred.';
                break;
            case '42506':
                $keterangan = 'Owner authorization failure occurred.';
                break;
            case '42509':
                $keterangan = 'SQL statement is not authorized, because of the DYNAMICRULES option.';
                break;
            case '42510':
                $keterangan = 'The authorization ID does not have the privilege to create functions or procedures in the WLM environment.';
                break;
            case '42512':
                $keterangan = 'The authorization ID does not have security to the protected column.';
                break;
            case '42513':
                $keterangan = 'The authorization ID does not have the MLS WRITE-DOWN privilege.';
                break;
            case '42517':
                $keterangan = 'The specified authorization ID is not allowed to use the trusted context.';
                break;
            case '42601':
                $keterangan = 'A character, token, or clause is invalid or missing.';
                break;
            case '42602':
                $keterangan = 'A character that is invalid in a name has been detected.';
                break;
            case '42603':
                $keterangan = 'An unterminated string constant has been detected.';
                break;
            case '42604':
                $keterangan = 'An invalid numeric or string constant has been detected.';
                break;
            case '42605':
                $keterangan = 'The number of arguments specified for a scalar function is invalid.';
                break;
            case '42606':
                $keterangan = 'An invalid hexadecimal constant has been detected.';
                break;
            case '42607':
                $keterangan = 'An operand of an aggregate function or CONCAT operator is invalid.';
                break;
            case '42608':
                $keterangan = 'The use of NULL or DEFAULT in VALUES or an assignment statement is invalid.';
                break;
            case '42609':
                $keterangan = 'All operands of an operator or predicate are parameter markers.';
                break;
            case '42610':
                $keterangan = 'A parameter marker or the null value is not allowed.';
                break;
            case '42611':
                $keterangan = 'The column, argument, parameter, or global variable definition is invalid.';
                break;
            case '42612':
                $keterangan = 'The statement string is an SQL statement that is not acceptable in the context in which it is presented.';
                break;
            case '42613':
                $keterangan = 'Clauses are mutually exclusive.';
                break;
            case '42614':
                $keterangan = 'A duplicate keyword or clause is invalid.';
                break;
            case '42615':
                $keterangan = 'An invalid alternative was detected.';
                break;
            case '42617':
                $keterangan = 'The statement string is blank or empty.';
                break;
            case '42618':
                $keterangan = 'A host variable is not allowed.';
                break;
            case '42620':
                $keterangan = 'Read-only SCROLL was specified with the UPDATE clause.';
                break;
            case '42621':
                $keterangan = 'The check constraint or generated column expression is invalid.';
                break;
            case '42622':
                $keterangan = 'A name or label is too long.';
                break;
            case '42623':
                $keterangan = 'A DEFAULT clause cannot be specified.';
                break;
            case '42625':
                $keterangan = 'A CASE expression is invalid.';
                break;
            case '42626':
                $keterangan = 'A column specification is not allowed for a CREATE INDEX that is built on an auxiliary table.';
                break;
            case '42629':
                $keterangan = 'Parameter names must be specified for SQL routines.';
                break;
            case '42630':
                $keterangan = 'An SQLSTATE or SQLCODE variable is not valid in this context.';
                break;
            case '42633':
                $keterangan = 'An AS clause is required for an argument of XMLATTRIBUTES or XMLFOREST.';
                break;
            case '42634':
                $keterangan = 'The XML name is not valid.';
                break;
            case '42701':
                $keterangan = 'The same target is specified more than once for assignment in the same SQL statement.';
                break;
            case '42702':
                $keterangan = 'A column reference is ambiguous, because of duplicate names.';
                break;
            case '42703':
                $keterangan = 'An undefined column or parameter name was detected.';
                break;
            case '42704':
                $keterangan = 'An undefined object or constraint name was detected.';
                break;
            case '42705':
                $keterangan = 'An undefined server-name was detected.';
                break;
            case '42707':
                $keterangan = 'A column name in ORDER BY does not identify a column of the result table.';
                break;
            case '42708':
                $keterangan = 'The locale specified in a SET LOCALE or locale sensitive function was not found.';
                break;
            case '42709':
                $keterangan = 'A duplicate column name was specified in a key column list.';
                break;
            case '42710':
                $keterangan = 'A duplicate object or constraint name was detected.';
                break;
            case '42711':
                $keterangan = 'A duplicate column name was detected in the object definition or ALTER TABLE statement.';
                break;
            case '42712':
                $keterangan = 'A duplicate table designator was detected in the FROM clause or REFERENCING clause of a CREATE TRIGGER statement.';
                break;
            case '42713':
                $keterangan = 'A duplicate object was detected in a list or is the same as an existing object.';
                break;
            case '42714':
                $keterangan = 'A host variable can be defined only once.';
                break;
            case '42718':
                $keterangan = 'The local server name is not defined.';
                break;
            case '42721':
                $keterangan = 'The special register name is unknown at the server.';
                break;
            case '42723':
                $keterangan = 'A routine with the same signature already exists.';
                break;
            case '42724':
                $keterangan = 'Unable to access an external program used for a user-defined function or a procedure.';
                break;
            case '42725':
                $keterangan = 'A routine was referenced directly (not by either signature or by specific instance name), but there is more than one specific instance of that routine.';
                break;
            case '42726':
                $keterangan = 'Duplicate names for common table expressions were detected.';
                break;
            case '42732':
                $keterangan = 'A duplicate schema name in a special register was detected.';
                break;
            case '42734':
                $keterangan = 'A duplicate parameter-name, SQL variable name, label, or condition-name was detected.';
                break;
            case '42736':
                $keterangan = 'The label specified on the GOTO, ITERATE, or LEAVE statement is not found or not valid.';
                break;
            case '42737':
                $keterangan = 'The condition specified is not defined.';
                break;
            case '42749':
                $keterangan = 'An XML schema document with the same target namespace and schema location already exists for the XML schema.';
                break;
            case '4274A':
                $keterangan = 'An XSROBJECT is not found in the XML schema repository.';
                break;
            case '4274B':
                $keterangan = 'A unique XSROBJECT could not be found in the XML schema repository.';
                break;
            case '4274C':
                $keterangan = 'The specified attribute was not found in the trusted context.';
                break;
            case '4274D':
                $keterangan = 'The specified attribute already exists in the trusted context.';
                break;
            case '4274E':
                $keterangan = 'The specified attribute is not supported in the trusted context.';
                break;
            case '4274M':
                $keterangan = 'An undefined period name was detected.';
                break;
            case '42801':
                $keterangan = 'Isolation level UR is invalid, because the result table is not read-only.';
                break;
            case '42802':
                $keterangan = 'The number of insert or update values is not the same as the number of columns or variables.';
                break;
            case '42803':
                $keterangan = 'A column reference in the SELECT or HAVING clause is invalid, because it is not a grouping column; or a column reference in the GROUP BY clause is invalid.';
                break;
            case '42804':
                $keterangan = 'The result expressions in a CASE expression are not compatible.';
                break;
            case '42805':
                $keterangan = 'An integer in the ORDER BY clause does not identify a column of the result table.';
                break;
            case '42806':
                $keterangan = 'A value cannot be assigned to a variable, because the data types are not compatible.';
                break;
            case '42807':
                $keterangan = 'The data-change statement is not permitted on this object.';
                break;
            case '42808':
                $keterangan = 'A column identified in the INSERT or UPDATE operation is not updatable.';
                break;
            case '42809':
                $keterangan = 'The identified object is not the type of object to which the statement applies.';
                break;
            case '42810':
                $keterangan = 'A base table is not identified in a FOREIGN KEY clause.';
                break;
            case '42811':
                $keterangan = 'The number of columns specified is not the same as the number of columns in the SELECT clause.';
                break;
            case '42813':
                $keterangan = 'WITH CHECK OPTION cannot be used for the specified view.';
                break;
            case '42815':
                $keterangan = 'The data type, length, scale, value, or CCSID is invalid.';
                break;
            case '42816':
                $keterangan = 'A datetime value or duration in an expression is invalid.';
                break;
            case '42818':
                $keterangan = 'The operands of an operator or function are not compatible or comparable.';
                break;
            case '42819':
                $keterangan = 'An operand of an arithmetic operation or an operand of a function that requires a number is invalid.';
                break;
            case '42820':
                $keterangan = 'A numeric constant is too long, or it has a value that is not within the range of its data type.';
                break;
            case '42821':
                $keterangan = 'A data type for an assignment to a column or variable is not compatible with the data type.';
                break;
            case '42822':
                $keterangan = 'An expression in the ORDER BY clause or GROUP BY clause is not valid.';
                break;
            case '42823':
                $keterangan = 'Multiple columns are returned from a subquery that only allows one column.';
                break;
            case '42824':
                $keterangan = 'An operand of LIKE is not a string, or the first operand is not a column.';
                break;
            case '42825':
                $keterangan = 'The rows of UNION, INTERSECT, EXCEPT, or VALUES do not have compatible columns.';
                break;
            case '42826':
                $keterangan = 'The rows of UNION, INTERSECT, EXCEPT, or VALUES do not have the same number of columns.';
                break;
            case '42827':
                $keterangan = 'The table identified in the UPDATE or DELETE is not the same table designated by the cursor.';
                break;
            case '42828':
                $keterangan = 'The table designated by the cursor of the UPDATE or DELETE statement cannot be modified, or the cursor is read-only.';
                break;
            case '42829':
                $keterangan = 'FOR UPDATE OF is invalid, because the result table designated by the cursor cannot be modified.';
                break;
            case '42830':
                $keterangan = 'The foreign key does not conform to the description of the parent key.';
                break;
            case '42831':
                $keterangan = 'A column of a primary key, unique key, ROWID, ROW CHANGE TIMESTAMP does not allow null values.';
                break;
            case '42832':
                $keterangan = 'The operation is not allowed on system objects.';
                break;
            case '42834':
                $keterangan = 'SET NULL cannot be specified, because no column of the foreign key can be assigned the null value.';
                break;
            case '42835':
                $keterangan = 'Cyclic references cannot be specified between named derived tables.';
                break;
            case '42836':
                $keterangan = 'The specification of a recursive, named derived table is invalid.';
                break;
            case '42837':
                $keterangan = 'The column cannot be altered, because its attributes are not compatible with the current column attributes.';
                break;
            case '42842':
                $keterangan = 'A column or parameter definition is invalid, because a specified option is inconsistent with the column description.';
                break;
            case '42845':
                $keterangan = 'An invalid use of a NOT DETERMINISTIC or EXTERNAL ACTION function was detected.';
                break;
            case '42846':
                $keterangan = 'Cast from source type to target type is not supported.';
                break;
            case '42849':
                $keterangan = 'The specified option is not supported for routines.';
                break;
            case '42852':
                $keterangan = 'The privileges specified in GRANT or REVOKE are invalid or inconsistent. (For example, GRANT ALTER on a view.)';
                break;
            case '42855':
                $keterangan = 'The assignment of the LOB or XML to this variable is not allowed. The target variable for all fetches of a LOB or XML value for this cursor must be the same for all FETCHes.';
                break;
            case '42856':
                $keterangan = 'The alter of a CCSID to the specified CCSID is not valid.';
                break;
            case '42866':
                $keterangan = 'The data type in either the RETURNS clause or the CAST FROM clause in the CREATE FUNCTION statement is not appropriate for the data type returned from the sourced function or RETURN statement in 	the function body.';
                break;
            case '42872':
                $keterangan = 'FETCH statement clauses are incompatible with the cursor definition.';
                break;
            case '42873':
                $keterangan = 'An invalid number of rows was specified in a multiple-row FETCH or multiple-row INSERT.';
                break;
            case '42877':
                $keterangan = 'The column name cannot be qualified.';
                break;
            case '42878':
                $keterangan = 'An invalid function or procedure name was used with the EXTERNAL keyword.';
                break;
            case '42879':
                $keterangan = 'The data type of one or more input parameters in the CREATE FUNCTION statement is not appropriate for the corresponding data type in the source function.';
                break;
            case '42880':
                $keterangan = 'The CAST TO and CAST FROM data types are incompatible, or would always result in truncation of a fixed string.';
                break;
            case '42882':
                $keterangan = 'The specific instance name qualifier is not equal to the function name qualifier.';
                break;
            case '42883':
                $keterangan = 'No routine was found with a matching signature.';
                break;
            case '42884':
                $keterangan = 'No routine was found with the specified name and compatible arguments.';
                break;
            case '42885':
                $keterangan = 'The number of input parameters specified on a CREATE FUNCTION statement does not match the number provided by the function named in the SOURCE clause.';
                break;
            case '42886':
                $keterangan = 'The IN, OUT, or INOUT parameter attributes do not match.';
                break;
            case '42887':
                $keterangan = 'The function is not valid in the context where it occurs.';
                break;
            case '42888':
                $keterangan = 'The table does not have a primary key.';
                break;
            case '42889':
                $keterangan = 'The table already has a primary key.';
                break;
            case '42890':
                $keterangan = 'A column list was specified in the references clause, but the identified parent table does not have a unique constraint with the specified column names.';
                break;
            case '42893':
                $keterangan = 'The object or constraint cannot be dropped, altered, or transferred or authorities cannot be revoked from the object, because other objects are dependent on it.';
                break;
            case '42894':
                $keterangan = 'The value of a column or sequence attribute is invalid.';
                break;
            case '42895':
                $keterangan = 'For static SQL, an input variable cannot be used, because its data type is not compatible with the parameter of a procedure or user-defined function.';
                break;
            case '42898':
                $keterangan = 'An invalid correlated reference or transition table was detected in a trigger.';
                break;
            case '42899':
                $keterangan = 'Correlated references and column names are not allowed for triggered actions with the FOR EACH STATEMENT clause.';
                break;
            case '428A1':
                $keterangan = 'Unable to access a file referenced by a file reference variable.';
                break;
            case '428B3':
                $keterangan = 'An invalid SQLSTATE was specified.';
                break;
            case '428B4':
                $keterangan = 'The part clause of a LOCK TABLE statement is not valid.';
                break;
            case '428B7':
                $keterangan = 'A number specified in an SQL statement is out of the valid range.';
                break;
            case '428C1':
                $keterangan = 'The data type or attribute of a column can only be specified once for a table.';
                break;
            case '428C2':
                $keterangan = 'Examination of the function body indicates that the given clause should have been specified on the CREATE FUNCTION statement.';
                break;
            case '428C4':
                $keterangan = 'The number of elements on each side of the predicate operator is not the same.';
                break;
            case '428C7':
                $keterangan = 'A ROWID or reference column specification is not valid or used in an invalid context.';
                break;
            case '428C9':
                $keterangan = 'A column defined as GENERATED ALWAYS cannot be specified as the target column of an insert or update operation.';
                break;
            case '428D2':
                $keterangan = 'AS LOCATOR cannot be specified for a non-LOB parameter.';
                break;
            case '428D3':
                $keterangan = 'GENERATED is not allowed for the specified data type or attribute of a column.';
                break;
            case '428D4':
                $keterangan = 'A cursor specified in a FOR statement cannot be referenced in an OPEN, CLOSE, or FETCH statement.';
                break;
            case '428D5':
                $keterangan = 'The ending label does not match the beginning label.';
                break;
            case '428D6':
                $keterangan = 'UNDO is not allowed for NOT ATOMIC compound statements.';
                break;
            case '428D7':
                $keterangan = 'The condition value is not allowed.';
                break;
            case '428D8':
                $keterangan = 'The sqlcode or sqlstate variable declaration is not valid.';
                break;
            case '428EC':
                $keterangan = 'The fullselect specified for the materialized query table is not valid.';
                break;
            case '428EK':
                $keterangan = 'The schema qualifier is not valid.';
                break;
            case '428EW':
                $keterangan = 'The table cannot be converted to or from a materialized query table.';
                break;
            case '428F2':
                $keterangan = 'An integer expression must be specified on a RETURN statement in an SQL procedure.';
                break;
            case '428F4':
                $keterangan = 'The SENSITIVITY specified on FETCH is not allowed for the cursor.';
                break;
            case '428F5':
                $keterangan = 'The invocation of a routine is ambiguous.';
                break;
            case '428F9':
                $keterangan = 'A sequence expression cannot be specified in this context.';
                break;
            case '428FA':
                $keterangan = 'The scale of the decimal number must be zero.';
                break;
            case '428FB':
                $keterangan = 'Sequence-name must not be a sequence generated by the system.';
                break;
            case '428FC':
                $keterangan = 'The length of the encryption password is not valid.';
                break;
            case '428FE':
                $keterangan = 'The data is not a result of the ENCRYPT function.';
                break;
            case '428FJ':
                $keterangan = 'ORDER BY or FETCH FIRST is not allowed in the outer fullselect of a view or materialized query table.';
                break;
            case '428FL':
                $keterangan = 'A data change statement is not allowed in the context in which it was specified.';
                break;
            case '428FM':
                $keterangan = 'An SQL data change statement within a SELECT specified a view which is not a symmetric view.';
                break;
            case '428FP':
                $keterangan = 'Only one INSTEAD OF trigger is allowed for each kind of operation on a view.';
                break;
            case '428FQ':
                $keterangan = 'An INSTEAD OF trigger cannot be created because of how the view is defined.';
                break;
            case '428FR':
                $keterangan = 'A column cannot be altered as specified.';
                break;
            case '428FS':
                $keterangan = 'A column cannot be added to an index.';
                break;
            case '428FT':
                $keterangan = 'The partitioning clause specified on CREATE or ALTER is not valid.';
                break;
            case '428FY':
                $keterangan = 'A column cannot be added, dropped, or altered in a materialized query table.';
                break;
            case '428G3':
                $keterangan = 'FINAL TABLE is not valid when the target view of the SQL data change statement in a fullselect has an INSTEAD OF trigger defined.';
                break;
            case '428G4':
                $keterangan = 'Invalid use of INPUT SEQUENCE ordering.';
                break;
            case '428G5':
                $keterangan = 'The assignment clause of the UPDATE statement must specify at least one column that is not an INCLUDE column.';
                break;
            case '428GB':
                $keterangan = 'A character could not be converted and substitution characters are not allowed.';
                break;
            case '428GC':
                $keterangan = 'An invalid string unit was specified for a function.';
                break;
            case '428GH':
                $keterangan = 'The data type of one or more parameters specified in the ADD VERSION clause does not match the corresponding data type in the routine being altered.';
                break;
            case '428GI':
                $keterangan = 'An XML schema is not complete because an XML schema document is missing.';
                break;
            case '428GJ':
                $keterangan = 'The table cannot be truncated because DELETE triggers exist for the table or the table is a parent table of a referential constraint that would be affected by the statement.';
                break;
            case '428GL':
                $keterangan = 'The system authorization ID specified for a trusted context is already specified in another trusted context.';
                break;
            case '428GM':
                $keterangan = 'The trusted context is already defined to be used by this authorization ID or PUBLIC.';
                break;
            case '428GN':
                $keterangan = 'The specified authorization ID or PUBLIC is not defined in the specified trusted context.';
                break;
            case '428GU':
                $keterangan = 'A table must include at least one column that is not implicitly hidden.';
                break;
            case '428H8':
                $keterangan = 'The object must be defined as secure because another object depends on it for row-level or column-level access control.';
                break;
            case '428H9':
                $keterangan = 'PERMISSION or MASK cannot be altered.';
                break;
            case '428HA':
                $keterangan = 'An argument of a user-defined table function must not reference a column for which a column mask is defined.';
                break;
            case '428HB':
                $keterangan = 'A permission or mask cannot be created on the specified object.';
                break;
            case '428HC':
                $keterangan = 'A column mask is already defined for the specified column.';
                break;
            case '428HD':
                $keterangan = 'The statement cannot be processed because a column mask cannot be applied or the definition of the mask conflicts with the statement.';
                break;
            case '428HJ':
                $keterangan = 'The organization clause specified on CREATE or ALTER is not valid.';
                break;
            case '428HK':
                $keterangan = 'The specified hash space is not valid for the implicitly created table space.';
                break;
            case '428HM':
                $keterangan = 'The system versioning clause specified on CREATE or ALTER is not valid.';
                break;
            case '428HN':
                $keterangan = 'The period specification is not valid.';
                break;
            case '428I1':
                $keterangan = 'The columns updated by the XMLMODIFY function were not specified in the UPDATE SET clause.';
                break;
            case '42902':
                $keterangan = 'The object of the INSERT, UPDATE, or DELETE is also identified (possibly implicitly through a view) in a FROM clause.';
                break;
            case '42903':
                $keterangan = 'Invalid use of an aggregate function or OLAP function.';
                break;
            case '42905':
                $keterangan = 'DISTINCT is specified more than once in a subselect.';
                break;
            case '42906':
                $keterangan = 'An aggregate function in a subquery of a HAVING clause includes an expression that applies an operator to a correlated reference.';
                break;
            case '42907':
                $keterangan = 'The string is too long in the context it was specified.';
                break;
            case '42908':
                $keterangan = 'The statement does not include a required column list.';
                break;
            case '42909':
                $keterangan = 'CREATE VIEW includes an operator or operand that is not valid for views.';
                break;
            case '42911':
                $keterangan = 'A decimal divide operation is invalid, because the result would have a negative scale.';
                break;
            case '42912':
                $keterangan = 'A column cannot be updated, because it is not identified in the UPDATE clause of the select-statement of the cursor.';
                break;
            case '42914':
                $keterangan = 'The DELETE is invalid, because a table referenced in a subquery can be affected by the operation.';
                break;
            case '42915':
                $keterangan = 'An invalid referential constraint has been detected.';
                break;
            case '42917':
                $keterangan = 'The object cannot be explicitly dropped or altered.';
                break;
            case '42918':
                $keterangan = 'A user-defined data type cannot be created with a system-defined data type name (for example, INTEGER).';
                break;
            case '42924':
                $keterangan = 'An alias resolved to another alias rather than a table or view at the remote location.';
                break;
            case '42925':
                $keterangan = 'Recursive named derived tables cannot specify SELECT DISTINCT and must specify UNION ALL.';
                break;
            case '42927':
                $keterangan = 'The function cannot be altered to NOT DETERMINISTIC or EXTERNAL ACTION because it is referenced by one or more existing views.';
                break;
            case '42932':
                $keterangan = 'The program preparation assumptions are incorrect.';
                break;
            case '42939':
                $keterangan = 'The name cannot be used, because the specified identifier is reserved for system use.';
                break;
            case '42945':
                $keterangan = 'ALTER CCSID is not allowed on a table space or database that contains a view.';
                break;
            case '42961':
                $keterangan = 'The server name specified does not match the current server.';
                break;
            case '42962':
                $keterangan = 'A long column, LOB column, structured type column or datalink column cannot be used in an index, a key, generated column, or a constraint.';
                break;
            case '42963':
                $keterangan = 'Invalid specification of a security label column.';
                break;
            case '42969':
                $keterangan = 'The package was not created.';
                break;
            case '42972':
                $keterangan = 'An expression in a join-condition or ON clause of a MERGE statement references columns in more than one of the operand tables.';
                break;
            case '42986':
                $keterangan = 'The source table of a rename operation is referenced in a context where is it not supported.';
                break;
            case '42987':
                $keterangan = 'The statement or routine is not allowed in a trigger.';
                break;
            case '42988':
                $keterangan = 'The operation is not allowed with mixed ASCII data.';
                break;
            case '42993':
                $keterangan = 'The column, as defined, is too large to be logged.';
                break;
            case '42995':
                $keterangan = 'The requested function does not apply to global temporary tables.';
                break;
            case '42997':
                $keterangan = 'Capability is not supported by this version of the DB2 application requester, DB2 application server, or the combination of the two.';
                break;
            case '429B1':
                $keterangan = 'A procedure specifying COMMIT ON RETURN cannot be the target of a nested CALL statement.';
                break;
            case '429BI':
                $keterangan = 'The condition area is full and cannot handle more errors for a NOT ATOMIC statement.';
                break;
            case '429BN':
                $keterangan = 'A CREATE statement cannot be processed when the value of CURRENT SCHEMA differs from CURRENT SQLID.';
                break;
            case '429BQ':
                $keterangan = 'The specified alter of the data type or attribute is not allowed.';
                break;
            case '429BS':
                $keterangan = 'Invalid index definition involving an XMLPATTERN clause or a column defined with a data type of XML.';
                break;
            case '429BV':
                $keterangan = 'Invalid specification of a ROW CHANGE TIMESTAMP column.';
                break;
            case '429BW':
                $keterangan = 'The statement cannot be processed due to related implicitly created objects.';
                break;
            case '429BX':
                $keterangan = 'The expression for an index key is not valid.';
                break;
            case '429BY':
                $keterangan = 'The statement is not allowed when using a trusted connection.';
                break;
            case '429C1':
                $keterangan = 'A data type cannot be determined for an untyped expression. ';
                break;
            case '44000':
                $keterangan = 'The INSERT or UPDATE is not allowed, because a resulting row does not satisfy the view definition.';
                break;
            case '46001':
                $keterangan = 'The URL specified on an install or replace of a jar procedure did not identify a valid jar file.';
                break;
            case '46002':
                $keterangan = 'The jar name specified on the install, replace, or remove of a Java procedure is not valid.';
                break;
            case '46003':
                $keterangan = 'The jar file cannot be removed, a class is in use by a procedure.';
                break;
            case '46007':
                $keterangan = 'A Java function has a Java method with an invalid signature.';
                break;
            case '46008':
                $keterangan = 'A Java function could not map to a single Java method.';
                break;
            case '4600C':
                $keterangan = 'The jar cannot be removed. It is in use.';
                break;
            case '4600D':
                $keterangan = 'The value provided for the new Java path is invalid.';
                break;
            case '4600E':
                $keterangan = 'The alter of the jar failed because the specified path references itself.';
                break;
            case '46103':
                $keterangan = 'A Java routine encountered a ClassNotFound exception.';
                break;
            case '46501':
                $keterangan = 'The install or remove jar procedure specified the use of a deployment descriptor.';
                break;
            case '46502':
                $keterangan = 'A user-defined procedure has returned a DYNAMIC RESULT SET of an invalid class. The parameter is not a DB2 result set.';
                break;
            case '51002':
                $keterangan = 'The package corresponding to an SQL statement execution request was not found.';
                break;
            case '51003':
                $keterangan = 'Consistency tokens do not match.';
                break;
            case '51004':
                $keterangan = 'An address in the SQLDA is invalid.';
                break;
            case '51005':
                $keterangan = 'The previous system error has disabled this function.';
                break;
            case '51006':
                $keterangan = 'A valid connection has not been established.';
                break;
            case '51008':
                $keterangan = 'The release number of the program or package is not valid.';
                break;
            case '51015':
                $keterangan = 'An attempt was made to execute a section that was found to be in error at bind time.';
                break;
            case '51021':
                $keterangan = 'SQL statements cannot be executed until the application process executes a rollback operation.';
                break;
            case '51024':
                $keterangan = 'An object cannot be used, because it has been marked inoperative.';
                break;
            case '51030':
                $keterangan = 'The procedure referenced in a DESCRIBE PROCEDURE or ASSOCIATE LOCATOR statement has not yet been called within the application process.';
                break;
            case '51032':
                $keterangan = 'A valid CCSID has not yet been specified for this DB2 for z/OS® subsystem.';
                break;
            case '51033':
                $keterangan = 'The operation is not allowed because it operates on a result set that was not created by the current server.';
                break;
            case '51034':
                $keterangan = 'The routine defined with MODIFIES SQL DATA is not valid in the context in which it is invoked.';
                break;
            case '51035':
                $keterangan = 'A PREVIOUS VALUE expression cannot be used because a value has not been generated for the sequence yet in this session.';
                break;
            case '51036':
                $keterangan = 'An implicit connect to a remote server is not allowed because a savepoint is outstanding.';
                break;
            case '51039':
                $keterangan = 'The ENCRYPTION PASSWORD value is not set.';
                break;
            case '53001':
                $keterangan = 'A clause is invalid, because the table space is a workfile.';
                break;
            case '53004':
                $keterangan = 'DSNDB07 is the implicit workfile database.';
                break;
            case '53014':
                $keterangan = 'The specified OBID is invalid.';
                break;
            case '53022':
                $keterangan = 'Variable or parameter is not allowed.';
                break;
            case '53035':
                $keterangan = 'Key limits must be specified in the CREATE or ALTER INDEX statement.';
                break;
            case '53036':
                $keterangan = 'The number of PARTITION specifications is not the same as the number of partitions.';
                break;
            case '53037':
                $keterangan = 'A partitioned index cannot be created on a table in a non-partitioned table space.';
                break;
            case '53038':
                $keterangan = 'The number of key limit values is zero or greater than the number of columns in the key.';
                break;
            case '53039':
                $keterangan = 'The PARTITION clause of the ALTER statement is omitted or invalid.';
                break;
            case '53040':
                $keterangan = 'The buffer pool cannot be changed as specified.';
                break;
            case '53041':
                $keterangan = 'The page size of the buffer pool is invalid.';
                break;
            case '53043':
                $keterangan = 'Columns with different field procedures cannot be compared.';
                break;
            case '53044':
                $keterangan = 'The columns have a field procedure, but the field types are not compatible.';
                break;
            case '53045':
                $keterangan = 'The data type of the key limit constant is not the same as the data type of the column.';
                break;
            case '53088':
                $keterangan = 'LOCKMAX is inconsistent with the specified LOCKSIZE.';
                break;
            case '53089':
                $keterangan = 'The number of variable parameters for a stored procedure is not equal to the number of expected variable parameters.';
                break;
            case '53090':
                $keterangan = 'Only data from one encoding scheme, either ASCII, EBCDIC or Unicode, can be referenced in the same SQL statement.';
                break;
            case '53091':
                $keterangan = 'The encoding scheme specified is not the same as the encoding scheme currently in use for the containing table space.';
                break;
            case '53092':
                $keterangan = 'Type 1 index cannot be created for a table using the ASCII encoding scheme.';
                break;
            case '53093':
                $keterangan = 'The CCSID ASCII or UNICODE clause is not supported for this database or table space.';
                break;
            case '53094':
                $keterangan = 'The PLAN_TABLE cannot be created with the FOR ASCII clause.';
                break;
            case '53095':
                $keterangan = 'CREATE or ALTER statement cannot define an object with the specified encoding scheme.';
                break;
            case '53096':
                $keterangan = 'The PARTITION clause was specified on CREATE AUXILIARY TABLE, but the base table is not partitioned.';
                break;
            case '53098':
                $keterangan = 'The auxiliary table cannot be created because a column was specified that is not a LOB column.';
                break;
            case '53099':
                $keterangan = 'A WLM ENVIRONMENT name must be specified on the CREATE FUNCTION statement.';
                break;
            case '530A1':
                $keterangan = 'An ALTER TABLE statement specified FLOAT as the new data type for a column, but there is an existing index or constraint that restricts the use of FLOAT.';
                break;
            case '530A2':
                $keterangan = 'The PARTITIONING clause is not allowed on the specified index.';
                break;
            case '530A3':
                $keterangan = 'The specified option is not allowed for the internal representation of the routine specified';
                break;
            case '530A4':
                $keterangan = 'The options specified on ALTER statement are not the same as those specified when the object was created.';
                break;
            case '530A5':
                $keterangan = 'The REGENERATE option is only valid for an index with key expressions.';
                break;
            case '530A7':
                $keterangan = 'EXCHANGE DATA is not allowed because the tables do not have a defined clone relationship.';
                break;
            case '530A8':
                $keterangan = 'A system parameter is incompatible with the specified SQL statement.';
                break;
            case '54001':
                $keterangan = 'The statement is too long or too complex.';
                break;
            case '54002':
                $keterangan = 'A string constant is too long.';
                break;
            case '54004':
                $keterangan = 'The statement has too many table names or too many items in a SELECT or INSERT list.';
                break;
            case '54005':
                $keterangan = 'The sort key is too long, or has too many columns.';
                break;
            case '54006':
                $keterangan = 'The result string is too long.';
                break;
            case '54008':
                $keterangan = 'The key is too long, a column of the key is too long, or the key has too many columns.';
                break;
            case '54010':
                $keterangan = 'The record length of the table is too long.';
                break;
            case '54011':
                $keterangan = 'Too many columns were specified for a table, view, or table function.';
                break;
            case '54024':
                $keterangan = 'The check constraint, generated column, or key expression is too long.';
                break;
            case '54025':
                $keterangan = 'The table description exceeds the maximum size of the object descriptor.';
                break;
            case '54027':
                $keterangan = 'The catalog has the maximum number of user-defined indexes.';
                break;
            case '54035':
                $keterangan = 'An internal object limit exceeded.';
                break;
            case '54038':
                $keterangan = 'Maximum depth of nested routines or triggers was exceeded.';
                break;
            case '54041':
                $keterangan = 'The maximum number of internal identifiers has been reached.';
                break;
            case '54042':
                $keterangan = 'Only one index is allowed on an auxiliary table.';
                break;
            case '54051':
                $keterangan = 'Value specified on FETCH ABSOLUTE or RELATIVE is invalid.';
                break;
            case '54054':
                $keterangan = 'The number of data partitions, or the combination of the number of table space partitions and the corresponding length of the partitioning limit key is exceeded.';
                break;
            case '54055':
                $keterangan = 'The maximum number of versions has been reached for a table or index.';
                break;
            case '54058':
                $keterangan = 'The internal representation of an XML path is too long.';
                break;
            case '54065':
                $keterangan = 'The maximum of 99999 implicitly generated object names has been exceeded.';
                break;
            case '55002':
                $keterangan = 'The explanation table is not defined properly.';
                break;
            case '55003':
                $keterangan = 'The DDL registration table is not defined properly.';
                break;
            case '55004':
                $keterangan = 'The database cannot be accessed, because it is no longer a shared database.';
                break;
            case '55006':
                $keterangan = 'The object cannot be dropped, because it is currently in use by the same application process.';
                break;
            case '55007':
                $keterangan = 'The object cannot be altered, because it is currently in use by the same application process.';
                break;
            case '55011':
                $keterangan = 'The operation is disallowed, because the workfile database is not in the stopped state.';
                break;
            case '55012':
                $keterangan = 'A clustering index is not valid on the table.';
                break;
            case '55014':
                $keterangan = 'The table does not have an index to enforce the uniqueness of the primary key.';
                break;
            case '55015':
                $keterangan = 'The ALTER statement cannot be executed, because the pageset is not in the stopped state.';
                break;
            case '55016':
                $keterangan = 'The ALTER statement is invalid, because the pageset has user-managed data sets.';
                break;
            case '55017':
                $keterangan = 'The table cannot be created in the table space, because it already contains a table.';
                break;
            case '55019':
                $keterangan = 'The object is in an invalid state for the operation.';
                break;
            case '55020':
                $keterangan = 'A work file database is already defined for the member.';
                break;
            case '55023':
                $keterangan = 'An error occurred calling a procedure.';
                break;
            case '55030':
                $keterangan = 'A package specified in a remote BIND REPLACE operation must not have a system list.';
                break;
            case '55035':
                $keterangan = 'The table cannot be dropped, because it is protected.';
                break;
            case '55048':
                $keterangan = 'Encrypted data cannot be encrypted.';
                break;
            case '55058':
                $keterangan = 'The DEBUG MODE cannot be changed for a routine that was created with DISABLE DEBUG MODE.';
                break;
            case '55059':
                $keterangan = 'The currently active version for a routine cannot be dropped.';
                break;
            case '55063':
                $keterangan = 'The XML schema is not in the correct state for the operation.';
                break;
            case '55078':
                $keterangan = 'The table is already in the specified state.';
                break;
            case '56010':
                $keterangan = 'The subtype of a string variable is not the same as the subtype at bind time, and the difference cannot be resolved by character conversion.';
                break;
            case '56016':
                $keterangan = 'The ranges specified for data partitions are not valid.';
                break;
            case '56018':
                $keterangan = 'A column cannot be added to the table, because it has an edit procedure.';
                break;
            case '56023':
                $keterangan = 'An invalid reference to a remote object has been detected.';
                break;
            case '56025':
                $keterangan = 'An invalid use of AT ALL LOCATIONS in GRANT or REVOKE has been detected.';
                break;
            case '56027':
                $keterangan = 'A nullable column of a foreign key with a delete rule of SET NULL cannot be part of the key of a partitioned index.';
                break;
            case '56031':
                $keterangan = 'The clause or scalar function is invalid, because mixed and DBCS data are not supported on this system.';
                break;
            case '56036':
                $keterangan = 'Specific and non-specific volume IDs are not allowed in a storage group.';
                break;
            case '56038':
                $keterangan = 'The requested feature is not supported in this environment.';
                break;
            case '56040':
                $keterangan = 'CURRENT SQLID cannot be used in a statement that references remote objects.';
                break;
            case '56045':
                $keterangan = 'The application must issue a rollback operation to back out the change that was made at the read-only application server.';
                break;
            case '56052':
                $keterangan = 'The remote requester tried to bind, rebind, or free a trigger package.';
                break;
            case '56053':
                $keterangan = 'The parent of a table in a read-only shared database must also be a table in a read-only shared database.';
                break;
            case '56054':
                $keterangan = 'User-defined data sets for objects in a shared database must be defined with SHAREOPTIONS(1,3).';
                break;
            case '56055':
                $keterangan = 'The database is defined as SHARE READ, but the table space or indexspace has not been defined on the owning system.';
                break;
            case '56056':
                $keterangan = 'The description of an object in a SHARE READ database must be consistent with its description in the OWNER system.';
                break;
            case '56057':
                $keterangan = 'A database cannot be altered from SHARE READ to SHARE OWNER.';
                break;
            case '56059':
                $keterangan = 'An error occurred when binding a triggered SQL statement.';
                break;
            case '56060':
                $keterangan = 'An LE function failed.';
                break;
            case '56062':
                $keterangan = 'A distributed operation is invalid, because the unit of work was started before DDF.';
                break;
            case '56064':
                $keterangan = 'The bind operation is disallowed, because the program depends on functions of a release from which fallback has occurred.';
                break;
            case '56065':
                $keterangan = 'The bind operation is disallowed, because the DBRM has been modified or was created for a different release.';
                break;
            case '56066':
                $keterangan = 'The rebind operation is disallowed, because the plan or package depends on functions of a release from which fallback has occurred.';
                break;
            case '56067':
                $keterangan = 'The rebind operation is disallowed, because the value of SYSPACKAGE.IBMREQD is invalid.';
                break;
            case '56072':
                $keterangan = 'Execution failed due to the function not supported by a downlevel server that will not affect the execution of subsequent SQL statements.';
                break;
            case '56073':
                $keterangan = 'Execution failed due to the function not supported by a downlevel server that will affect the execution of subsequent SQL statements.';
                break;
            case '56080':
                $keterangan = 'The data type is not allowed in DB2 private protocol processing.';
                break;
            case '56084':
                $keterangan = 'An unsupported SQLTYPE was encountered in a select list or input list.';
                break;
            case '56088':
                $keterangan = 'ALTER FUNCTION failed because functions cannot modify data when they are processed in parallel.';
                break;
            case '56089':
                $keterangan = 'Specified option requires type 2 indexes.';
                break;
            case '56090':
                $keterangan = 'The alter of an index or table is not allowed.';
                break;
            case '56095':
                $keterangan = 'A bind option is invalid.';
                break;
            case '56096':
                $keterangan = 'Bind options are incompatible.';
                break;
            case '560A1':
                $keterangan = 'The table space name is not valid.';
                break;
            case '560A2':
                $keterangan = 'A LOB table and its associated base table space must be in the same database.';
                break;
            case '560A3':
                $keterangan = 'The table is not compatible with the database.';
                break;
            case '560A4':
                $keterangan = 'The operation is not allowed on an auxiliary table.';
                break;
            case '560A5':
                $keterangan = 'An auxiliary table already exists for the specified column or partition.';
                break;
            case '560A6':
                $keterangan = 'A table cannot have a LOB column unless it also has a ROWID column or cannot have an XML column unless it also has a DOCID.';
                break;
            case '560A7':
                $keterangan = 'GBPCACHE NONE cannot be specified for a table space or index in GRECP.';
                break;
            case '560A8':
                $keterangan = 'An 8K or 16K buffer pool pagesize is invalid for a WORKFILE object.';
                break;
            case '560A9':
                $keterangan = 'A discontinued parameter, option, or clause was specified.';
                break;
            case '560AB':
                $keterangan = 'The data type is not supported in an SQL routine.';
                break;
            case '560AD':
                $keterangan = 'A view name was specified after LIKE in addition to the INCLUDING IDENTITY COLUMN ATTRIBUTES clause.';
                break;
            case '560AE':
                $keterangan = 'The specified table or view is not allowed in a LIKE clause.';
                break;
            case '560B1':
                $keterangan = 'Procedure failed because a result set was scrollable but the cursor was not positioned before the first row.';
                break;
            case '560B2':
                $keterangan = 'Open failed because the cursor is scrollable but the client does not support scrollable cursors.';
                break;
            case '560B3':
                $keterangan = 'Procedure failed because one or more result sets returned by the procedure are scrollable but the client does not support scrollable cursors.';
                break;
            case '560B5':
                $keterangan = 'Local special register is not valid as used.';
                break;
            case '560B8':
                $keterangan = 'The SQL statement cannot be executed because it was precompiled at a level that is incompatible with the current value of the ENCODING bind option or special register.';
                break;
            case '560B9':
                $keterangan = 'Hexadecimal constant GX is not allowed.';
                break;
            case '560BF':
                $keterangan = 'The encryption and decryption facility has not been installed.';
                break;
            case '560C3':
                $keterangan = 'An AFTER trigger cannot modify a row being inserted for an INSERT statement.';
                break;
            case '560C5':
                $keterangan = 'The package must be bound or rebound to be successfully executed.';
                break;
            case '560C7':
                $keterangan = 'ALTER VIEW failed.';
                break;
            case '560CC':
                $keterangan = 'ALTER INDEX failed.';
                break;
            case '560CG':
                $keterangan = 'An XML value contains a combination of XML nodes that causes an internal identifier limit to be exceeded.';
                break;
            case '560CH':
                $keterangan = 'The maximum number of children nodes for an XML node in an XML value is exceeded.to be exceeded.';
                break;
            case '560CK':
                $keterangan = 'Explain monitored statements failed.';
                break;
            case '560CM':
                $keterangan = 'An error occurred in a key expression evaluation.';
                break;
            case '560CU':
                $keterangan = 'The VARCHAR option is not consistent with the option specified when the procedure was created.';
                break;
            case '560CV':
                $keterangan = 'Invalid table reference for table locator.';
                break;
            case '560CY':
                $keterangan = 'A period specification or period clause is not valid as specified.';
                break;
            case '57001':
                $keterangan = 'The table is unavailable, because it does not have a primary index.';
                break;
            case '57002':
                $keterangan = 'GRANT and REVOKE are invalid, because authorization has been disabled.';
                break;
            case '57003':
                $keterangan = 'The specified buffer pool has not been activated.';
                break;
            case '57004':
                $keterangan = 'The table is unavailable, because it lacks a partitioned index.';
                break;
            case '57005':
                $keterangan = 'The statement cannot be executed, because a utility or a governor time limit was exceeded.';
                break;
            case '57006':
                $keterangan = 'The object cannot be created, because a DROP or CREATE is pending.';
                break;
            case '57007':
                $keterangan = 'The object cannot be used, because an operation is pending.';
                break;
            case '57008':
                $keterangan = 'The date or time local format exit has not been installed.';
                break;
            case '57010':
                $keterangan = 'A field procedure could not be loaded.';
                break;
            case '57011':
                $keterangan = 'Virtual storage or database resource is not available.';
                break;
            case '57012':
                $keterangan = 'A non-database resource is not available. This will not affect the successful execution of subsequent statements.';
                break;
            case '57013':
                $keterangan = 'A non-database resource is not available. This will affect the successful execution of subsequent statements.';
                break;
            case '57014':
                $keterangan = 'Processing was canceled as requested.';
                break;
            case '57015':
                $keterangan = 'Connection to the local DB2 not established.';
                break;
            case '57017':
                $keterangan = 'Character conversion is not defined.';
                break;
            case '57018':
                $keterangan = 'A DDL registration table or its unique index does not exist.';
                break;
            case '57023':
                $keterangan = 'The DDL statement cannot be executed, because a DROP is pending of a DDL registration table.';
                break;
            case '57033':
                $keterangan = 'Deadlock or timeout occurred without automatic rollback.';
                break;
            case '57051':
                $keterangan = 'The estimated CPU cost exceeds the resource limit.';
                break;
            case '57053':
                $keterangan = 'A table is not available in a routine or trigger because of violated nested SQL statement rules.';
                break;
            case '57054':
                $keterangan = 'A table is not available until the auxiliary tables and indexes for its externally stored columns have been created.';
                break;
            case '57057':
                $keterangan = 'The SQL statement cannot be executed due to a prior condition in a DRDA chain of SQL statements.';
                break;
            case '57062':
                $keterangan = 'Adjustment not allowed for a period as a result of a data change operation.';
                break;
            case '58001':
                $keterangan = 'The database cannot be created, because the assigned DBID is a duplicate.';
                break;
            case '58002':
                $keterangan = 'An exit has returned an error or invalid data.';
                break;
            case '58003':
                $keterangan = 'An invalid section number was detected.';
                break;
            case '58004':
                $keterangan = 'A system error (that does not necessarily preclude the successful execution of subsequent SQL statements) occurred.';
                break;
            case '58006':
                $keterangan = 'A system error occurred during connection.';
                break;
            case '58008':
                $keterangan = 'Execution failed due to a distribution protocol error that will not affect the successful execution of subsequent DDM commands or SQL statements.';
                break;
            case '58009':
                $keterangan = 'Execution failed due to a distribution protocol error that caused deallocation of the conversation.';
                break;
            case '58010':
                $keterangan = 'Execution failed due to a distribution protocol error that will affect the successful execution of subsequent DDM commands or SQL statements.';
                break;
            case '58011':
                $keterangan = 'The DDM command is invalid while the bind process in progress.';
                break;
            case '58012':
                $keterangan = 'The bind process with the specified package name and consistency token is not active.';
                break;
            case '58013':
                $keterangan = 'The SQLCODE is inconsistent with the reply message.';
                break;
            case '58014':
                $keterangan = 'The DDM command is not supported.';
                break;
            case '58015':
                $keterangan = 'The DDM object is not supported.';
                break;
            case '58016':
                $keterangan = 'The DDM parameter is not supported.';
                break;
            case '58017':
                $keterangan = 'The DDM parameter value is not supported.';
                break;
            case '58018':
                $keterangan = 'The DDM reply message is not supported.';
                break;
            case '58026':
                $keterangan = 'The number of variables in the statement is not equal to the number of variables in SQLSTTVRB.';
                break;
            case '5UA01':
                $keterangan = 'The task cannot be removed because it is currently executing.';
                break;
            default:
                $keterangan = 'Error SQLSTATE ' . $error;
        }
        return $keterangan;
    }

    public function sqlcode($str)
    {
        $re = '/SQLCODE=(.*)/D';
        preg_match($re, $str, $errornya);
        if (isset($errornya[1])) {
            $data = [
                'kode'  => $errornya[1],
                'pesan' => $this->pesan_sqlcode($errornya[1])
            ];
        } else {
            $data = [
                'kode'  => NULL,
                'pesan' => 'SQLCODE tidak ditemukan'
            ];
        }
        return $data;
    }

    public function sqlstate($str)
    {
        $re = '/SQLSTATE=(.*)\s/D';
        preg_match($re, $str, $errornya);
        if (isset($errornya[1])) {
            $data = [
                'kode'  => $errornya[1],
                'pesan' => $this->pesan_sqlstate($errornya[1])
            ];
        } else {
            $data = [
                'kode'  => NULL,
                'pesan' => 'SQLSTATE tidak ditemukan'
            ];
        }
        return $data;
    }
}