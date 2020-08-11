// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ApplyPhysicalConnectionLOARequest : TeaModel {
        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Bandwidth")]
        [Validation(Required=false)]
        public int? Bandwidth { get; set; }

        [NameInMap("PeerLocation")]
        [Validation(Required=false)]
        public string PeerLocation { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("CompanyName")]
        [Validation(Required=true)]
        public string CompanyName { get; set; }

        [NameInMap("LineType")]
        [Validation(Required=true)]
        public string LineType { get; set; }

        [NameInMap("Si")]
        [Validation(Required=true)]
        public string Si { get; set; }

        [NameInMap("ConstructionTime")]
        [Validation(Required=true)]
        public string ConstructionTime { get; set; }

        [NameInMap("PMInfo")]
        [Validation(Required=false)]
        public List<ApplyPhysicalConnectionLOARequestPMInfo> PMInfo { get; set; }
        public class ApplyPhysicalConnectionLOARequestPMInfo : TeaModel {
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

}
