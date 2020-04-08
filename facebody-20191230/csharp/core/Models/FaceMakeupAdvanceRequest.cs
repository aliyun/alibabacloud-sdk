// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class FaceMakeupAdvanceRequest : TeaModel {
        [NameInMap("ImageURLObject")]
        [Validation(Required=true)]
        public Stream ImageURLObject { get; set; }

        [NameInMap("MakeupType")]
        [Validation(Required=true)]
        public string MakeupType { get; set; }

        [NameInMap("ResourceType")]
        [Validation(Required=true)]
        public string ResourceType { get; set; }

        [NameInMap("Strength")]
        [Validation(Required=true)]
        public float? Strength { get; set; }

    }

}
