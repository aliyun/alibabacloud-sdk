// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeCharacterRequest : TeaModel {
        [NameInMap("ImageType")]
        [Validation(Required=false)]
        public int? ImageType { get; set; }

        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

        [NameInMap("MinHeight")]
        [Validation(Required=true)]
        public int? MinHeight { get; set; }

        [NameInMap("OutputProbability")]
        [Validation(Required=true)]
        public bool? OutputProbability { get; set; }

    }

}
