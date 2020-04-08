// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class FaceTidyupRequest : TeaModel {
        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

        [NameInMap("ShapeType")]
        [Validation(Required=true)]
        public int? ShapeType { get; set; }

        [NameInMap("Strength")]
        [Validation(Required=true)]
        public float? Strength { get; set; }

    }

}
