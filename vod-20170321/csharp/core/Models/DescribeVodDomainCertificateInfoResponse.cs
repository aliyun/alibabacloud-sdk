// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodDomainCertificateInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("CertInfos")]
        [Validation(Required=true)]
        public DescribeVodDomainCertificateInfoResponseCertInfos CertInfos { get; set; }
        public class DescribeVodDomainCertificateInfoResponseCertInfos : TeaModel {
            [NameInMap("CertInfo")]
            [Validation(Required=true)]
            public List<DescribeVodDomainCertificateInfoResponseCertInfosCertInfo> CertInfo { get; set; }
            public class DescribeVodDomainCertificateInfoResponseCertInfosCertInfo : TeaModel {
                    public string DomainName { get; set; }
                    public string CertName { get; set; }
                    public string CertDomainName { get; set; }
                    public string CertExpireTime { get; set; }
                    public string CertLife { get; set; }
                    public string CertOrg { get; set; }
                    public string CertType { get; set; }
                    public string ServerCertificateStatus { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
