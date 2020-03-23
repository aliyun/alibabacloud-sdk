// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class FaceFilterRequest : TeaModel {
        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

        [NameInMap("ResourceType")]
        [Validation(Required=true)]
        public string ResourceType { get; set; }

        [NameInMap("Strength")]
        [Validation(Required=true)]
        public float? Strength { get; set; }

    }

}
