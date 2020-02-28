// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageenhan.Models
{
    public class IntelligentCompositionRequest : TeaModel {
        [NameInMap("NumBoxes")]
        [Validation(Required=false)]
        public int? NumBoxes { get; set; }

        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

    }

}
