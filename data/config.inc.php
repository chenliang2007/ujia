<?php

//---�޸ı��ļ������С��!��������Ӧ����---
/*
����˵��:

SITE_URL        :   ��վ���ʵ�ַ, �����������ʵ�ַ�޸�ʱ�޸�, �����http://, ��Ҫ��ĩβ���'/'

DB_CONFIG       :   ���ݿ��������(Э��://�û���:����@���ݿ��������ַ:�˿�/���ݿ���)

DB_PREFIX       :   ���ݿ����ǰ׺

LANG            :   �ַ���������

COOKIE_DOMAIN   :   ��վCookie������

COOKIE_PATH     :   ��վCookie����·��

ECM_KEY         :   ��վ��Կ

MALL_SITE_ID    :   ��վID, �����޸�

ENABLED_GZIP    :   GZIP����,����GZIP�������û��ķ����ٶ�, ��Ӧ�ط������Ŀ���������.1Ϊ����,0Ϊ�ر�.

DEBUG_MODE      :   0: ���ɻ����ļ�,��ǿ�Ʊ���ģ��.1: �����ɻ����ļ�,��ǿ�Ʊ���ģ��. 2: ���ɻ����ļ�, ǿ�Ʊ���ģ��. 3: �����ɻ����ļ�, ǿ�Ʊ���ģ��. 4: ���ɻ���, ����ģ�浫�����ɱ����ļ�. 5: �����ɻ���, ����ģ�浫�����ɱ����ļ�.

CACHE_SERVER    :   ���ݻ��������,������default(php�ļ�����),Ҳ������memcached
CACHE_MEMCACHED : �洢�������ݵ�memcached������(��������ַ1:�˿�1)

MEMBER_TYPE     :   ��ѡֵ: default(ʹ�����õ��û�ϵͳ),uc(ʹ��UCenter��Ϊ�û�ϵͳ), Ҳ����������ĵ�����ϵͳ, ǰ��������������ص���չ����:)

ENABLED_SUBDOMAIN : �����������ܿ���,0Ϊ�ر�,1Ϊ����,����ʱ��������SUBDOMAIN_SUFFIX.�����������ܿ���������鿴��װ����docsĿ¼�µĶ���������������ĵ�.

SUBDOMAIN_SUFFIX : ����������׺,����:�û��Ķ�����������"test.mall.example.com", ����ֻ��Ҫ�ڴ���д"mall.example.com".

SESSION_TYPE     : session���ݴ洢���ͣ�Ŀǰ��ѡ��session��mysql
SESSION_MEMCACHED : �洢session���ݵ�memcached������(��������ַ1:�˿�1|��������ַ2:�˿�2)
*/

return array (
  'SITE_URL' => 'http://www.ujia.com',
  'DB_CONFIG' => 'mysql://mysql:^TFCVBNHY^@42.121.113.64:3306/ujia',
  'DB_PREFIX' => 'ujia_',
  'LANG' => 'sc-gbk',
  'COOKIE_DOMAIN' => '',
  'COOKIE_PATH' => '/',
  'ECM_KEY' => '87d4a659ca89dcfd860654c6768af3de',
  'MALL_SITE_ID' => 'EMNHRLgA1ewfCWWK',
  'ENABLED_GZIP' => 0,
  'DEBUG_MODE' => 0,
  'CACHE_SERVER' => 'default',
  'MEMBER_TYPE' => 'default',
  'ENABLED_SUBDOMAIN' => 0,
  'SUBDOMAIN_SUFFIX' => '',
  'SESSION_TYPE' => 'mysql',
  'SESSION_MEMCACHED' => 'localhost:11211',
  'CACHE_MEMCACHED' => 'localhost:11211',
);

?>
