// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodCertificateListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("CertificateListModel")]
        [Validation(Required=true)]
        public DescribeVodCertificateListResponseCertificateListModel CertificateListModel { get; set; }
        public class DescribeVodCertificateListResponseCertificateListModel : TeaModel {
            [NameInMap("Count")]
            [Validation(Required=true)]
            public int? Count { get; set; }
            [NameInMap("CertList")]
            [Validation(Required=true)]
            public DescribeVodCertificateListResponseCertificateListModelCertList CertList { get; set; }
            public class DescribeVodCertificateListResponseCertificateListModelCertList : TeaModel {
                [NameInMap("Cert")]
                [Validation(Required=true)]
                public List<DescribeVodCertificateListResponseCertificateListModelCertListCert> Cert { get; set; }
                public class DescribeVodCertificateListResponseCertificateListModelCertListCert : TeaModel {
                    [NameInMap("CertName")]
                    [Validation(Required=true)]
                    public string CertName { get; set; }

                    [NameInMap("CertId")]
                    [Validation(Required=true)]
                    public long CertId { get; set; }

                    [NameInMap("Fingerprint")]
                    [Validation(Required=true)]
                    public string Fingerprint { get; set; }

                    [NameInMap("Common")]
                    [Validation(Required=true)]
                    public string Common { get; set; }

                    [NameInMap("Issuer")]
                    [Validation(Required=true)]
                    public string Issuer { get; set; }

                    [NameInMap("LastTime")]
                    [Validation(Required=true)]
                    public long LastTime { get; set; }

                }

            }
        };

    }

}
