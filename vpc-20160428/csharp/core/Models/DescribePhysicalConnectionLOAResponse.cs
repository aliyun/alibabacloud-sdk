// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribePhysicalConnectionLOAResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PhysicalConnectionLOAType")]
        [Validation(Required=true)]
        public DescribePhysicalConnectionLOAResponsePhysicalConnectionLOAType PhysicalConnectionLOAType { get; set; }
        public class DescribePhysicalConnectionLOAResponsePhysicalConnectionLOAType : TeaModel {
            [NameInMap("InstanceId")]
            [Validation(Required=true)]
            public string InstanceId { get; set; }
            [NameInMap("CompanyName")]
            [Validation(Required=true)]
            public string CompanyName { get; set; }
            [NameInMap("CompanyLocalizedName")]
            [Validation(Required=true)]
            public string CompanyLocalizedName { get; set; }
            [NameInMap("LineType")]
            [Validation(Required=true)]
            public string LineType { get; set; }
            [NameInMap("LineCode")]
            [Validation(Required=true)]
            public string LineCode { get; set; }
            [NameInMap("LineLabel")]
            [Validation(Required=true)]
            public string LineLabel { get; set; }
            [NameInMap("ConstructionTime")]
            [Validation(Required=true)]
            public string ConstructionTime { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("LoaUrl")]
            [Validation(Required=true)]
            public string LoaUrl { get; set; }
            [NameInMap("SI")]
            [Validation(Required=true)]
            public string SI { get; set; }
            [NameInMap("PMInfo")]
            [Validation(Required=true)]
            public DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfo PMInfo { get; set; }
            public class DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfo : TeaModel {
                [NameInMap("PMInfo")]
                [Validation(Required=true)]
                public List<DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfoPMInfo> PMInfo { get; set; }
                public class DescribePhysicalConnectionLOAResponsePhysicalConnectionLOATypePMInfoPMInfo : TeaModel {
                    [NameInMap("PMName")]
                    [Validation(Required=true)]
                    public string PMName { get; set; }

                    [NameInMap("PMContactInfo")]
                    [Validation(Required=true)]
                    public string PMContactInfo { get; set; }

                    [NameInMap("PMCertificateType")]
                    [Validation(Required=true)]
                    public string PMCertificateType { get; set; }

                    [NameInMap("PMCertificateNo")]
                    [Validation(Required=true)]
                    public string PMCertificateNo { get; set; }

                    [NameInMap("PMGender")]
                    [Validation(Required=true)]
                    public string PMGender { get; set; }

                }

            }
        };

    }

}
