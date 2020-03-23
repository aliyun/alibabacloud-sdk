// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videoenhan.Models
{
    public class AbstractFilmVideoRequest : TeaModel {
        [NameInMap("VideoUrl")]
        [Validation(Required=true)]
        public string VideoUrl { get; set; }

        [NameInMap("Length")]
        [Validation(Required=true)]
        public int? Length { get; set; }

    }

}
